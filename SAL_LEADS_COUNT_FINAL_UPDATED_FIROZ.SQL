CREATE OR REPLACE FUNCTION DEVELOPERS.SAL_LEADS_COUNT_FINAL_UPDATED
                                  (
                                    P_RML_ID VARCHAR2,
                                    P_START_DATE DATE,
                                    P_END_DATE DATE,
                                    P_DESIGNATION VARCHAR2,
                                    P_USER_WANT VARCHAR2,
                                    P_PRODUCT_TYPE VARCHAR2,
                                    P_BRAND VARCHAR2,
                                    P_BAND_CATEGORY VARCHAR2) 
   RETURN NUMBER 
AS
V_TOTAL_COUNT NUMBER;
V_DATE_DIFFERECE NUMBER:=P_END_DATE-P_START_DATE;

BEGIN


          IF P_USER_WANT ='LEADS' THEN
                           IF P_DESIGNATION ='Product Head' THEN
                                        SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                   AND PRODUCT_TYPE=P_PRODUCT_TYPE
                                                   AND LDS.ENTRY_BY IN
                                                                              (SELECT DISTINCT EMPLOYEE_ID
                                                                                 FROM SAL_EMP_SETUP_TT
                                                                                WHERE DESIGNATION='Sales Executive'
                                                                                AND RESPONSIBLE_HEAD_EMPLOYEE_ID IN
                                                                                         (SELECT DISTINCT EMPLOYEE_ID
                                                                                            FROM SAL_EMP_SETUP_TT
                                                                                           WHERE DESIGNATION='Zonal Head'
                                                                                           AND RESPONSIBLE_HEAD_EMPLOYEE_ID = P_RML_ID)
                                                                               );
                           ELSIF P_DESIGNATION ='Zonal Head' THEN
                                      SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                    AND PRODUCT_TYPE=P_PRODUCT_TYPE
                                                   AND LDS.ENTRY_BY IN
                                                                              (SELECT DISTINCT EMPLOYEE_ID
                                                                                 FROM SAL_EMP_SETUP_TT
                                                                                WHERE RESPONSIBLE_HEAD_EMPLOYEE_ID = P_RML_ID
                                                                               );
                           ELSIF P_DESIGNATION ='Sales Executive' THEN
                                      SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                    AND PRODUCT_TYPE=P_PRODUCT_TYPE
                                                   AND LDS.ENTRY_BY =P_RML_ID;                                                  
                           END IF;
          ELSIF  P_USER_WANT ='WIN' THEN
                IF P_DESIGNATION ='BH' THEN
                    SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                     AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                     AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                                   AND STATUS='Win';
                ELSIF  P_DESIGNATION ='PH' THEN
                    SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                     AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                     AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                                   AND STATUS='Win'
                                                   AND LDS.ENTRY_BY IN
                                                                             (
                                                                              SELECT RML_ID from RML_COLL_APPS_USER
                                                                              where SAL_MM_ZH_ID IN (
                                                                                                          SELECT ZH_ID FROM SAL_ZH_SETUP WHERE PH_ID=P_RML_ID
                                                                                                            )
                                                                               );
                ELSIF  P_DESIGNATION ='ZH' THEN
                   SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                     AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                                     AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                   AND STATUS='Win'
                                                   AND LDS.ENTRY_BY IN
                                                                               (SELECT DISTINCT RML_ID
                                                                                 FROM RML_COLL_APPS_USER
                                                                                WHERE SAL_MM_ZH_ID = P_RML_ID
                                                                               );
                 ELSIF  P_DESIGNATION ='SC' THEN
                   SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                    AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                                    AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                   AND STATUS='Win'
                                                   AND LDS.ENTRY_BY = P_RML_ID ; 
                END IF;
               
          ELSIF  P_USER_WANT ='LOST' THEN
             IF P_DESIGNATION ='BH' THEN
              SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                     AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                                     AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                   AND STATUS='Lost';
             ELSIF  P_DESIGNATION ='PH' THEN
             SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                     AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                                   AND STATUS='Lost'
                                                   AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                   AND LDS.ENTRY_BY IN
                                                                             (
                                                                              SELECT RML_ID from RML_COLL_APPS_USER
                                                                              where SAL_MM_ZH_ID IN ( SELECT ZH_ID FROM SAL_ZH_SETUP WHERE PH_ID=P_RML_ID AND  BRAND_NAME=P_BRAND )
                                                                               );
             ELSIF  P_DESIGNATION ='ZH' THEN
                   SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                     AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                                   AND STATUS='Lost'
                                                   AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                   AND LDS.ENTRY_BY IN
                                                                              (SELECT DISTINCT RML_ID
                                                                                 FROM RML_COLL_APPS_USER
                                                                                WHERE SAL_MM_ZH_ID = P_RML_ID
                                                                               ); 
             ELSIF  P_DESIGNATION ='SC' THEN          
                     SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                   AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                                   AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                   AND STATUS='Lost'
                                                   AND LDS.ENTRY_BY=P_RML_ID;                                                     
             END IF;
               
          ELSIF  P_USER_WANT ='Hot'    OR  
                 P_USER_WANT = 'Warm'  OR 
                 P_USER_WANT ='Cold'  OR  
                 P_USER_WANT ='Not Interested' OR 
                 P_USER_WANT ='Q0' OR   P_USER_WANT ='Q1' OR  P_USER_WANT ='Q2' OR  P_USER_WANT ='Q3'
                 THEN
                 IF P_DESIGNATION ='BH' THEN
                  SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                    AND LDS.INTERESTED_MODEL=P_PRODUCT_TYPE
                                                    AND LDS.STATUS IS NULL
                                                    AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                   AND MODE_TYPE=P_USER_WANT;
                 ELSIF  P_DESIGNATION ='PH' THEN
                    SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                    AND LDS.INTERESTED_MODEL=P_PRODUCT_TYPE
                                                   AND LDS.MODE_TYPE=P_USER_WANT
                                                   AND LDS.STATUS IS NULL
                                                   AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                   AND LDS.ENTRY_BY IN
                                                              (
                                                              SELECT RML_ID from RML_COLL_APPS_USER
                                                              where SAL_MM_ZH_ID IN (
                                                                                    SELECT ZH_ID FROM SAL_ZH_SETUP WHERE PH_ID=P_RML_ID AND BRAND_NAME=P_BRAND
                                                                                    )
                                                               );
                 ELSIF  P_DESIGNATION ='ZH' THEN
                 SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                    AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                                   AND MODE_TYPE=P_USER_WANT
                                                   AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                   AND LDS.ENTRY_BY IN
                                                                              (SELECT DISTINCT a.RML_ID
                                                                                 FROM RML_COLL_APPS_USER a,SAL_LEADS_GEN b
                                                                                WHERE a.SAL_MM_ZH_ID = P_RML_ID
                                                                                --AND USER_FOR=P_BRAND
                                                                                AND A.RML_ID=B.ENTRY_BY
                                                                                AND b.INTERESTED_BRAND=P_BRAND
                                                                               );
                 ELSIF  P_DESIGNATION ='SC' THEN
                     SELECT COUNT (LDS.ENTRY_BY)
                                                    INTO V_TOTAL_COUNT
                                        FROM SAL_LEADS_GEN LDS
                                                   WHERE TRUNC (LDS.ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                                    AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                                   AND MODE_TYPE=P_USER_WANT
                                                   AND (P_BAND_CATEGORY IS NULL OR LDS.PRODUCT_TYPE=P_BAND_CATEGORY)
                                                   AND LDS.ENTRY_BY = P_RML_ID ;
                 END IF;
           
           
           
           
                           
           ELSIF  P_USER_WANT ='FOLLOW_UP'  THEN
           
                 IF P_DESIGNATION ='BH' THEN
                         Select COUNT(ID) INTO V_TOTAL_COUNT 
                               from SAL_LEADS_GEN
                                   WHERE trunc(VISIT_DATE)=TRUNC(SYSDATE)
                                    AND STATUS IS NULL
                                    AND INTERESTED_MODEL=P_PRODUCT_TYPE;
                 ELSIF  P_DESIGNATION ='PH' THEN
                        Select COUNT(ID) INTO V_TOTAL_COUNT 
                               from SAL_LEADS_GEN
                                   WHERE trunc(VISIT_DATE)=TRUNC(SYSDATE)
                                    AND STATUS IS NULL
                                    AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                   AND  ENTRY_BY IN    (
                                                                    SELECT RML_ID from RML_COLL_APPS_USER
                                                                     WHERE SAL_MM_ZH_ID IN (
                                                                                                          SELECT ZH_ID FROM SAL_ZH_SETUP WHERE PH_ID=P_RML_ID
                                                                                                           )
                                                                );
                 ELSIF  P_DESIGNATION ='ZH' THEN
                         Select COUNT(ID) INTO V_TOTAL_COUNT 
                               from SAL_LEADS_GEN
                                   WHERE trunc(VISIT_DATE)=TRUNC(SYSDATE)
                                    AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                     AND STATUS IS NULL
                                   AND  ENTRY_BY IN   (SELECT DISTINCT RML_ID
                                                                                 FROM RML_COLL_APPS_USER
                                                                                WHERE SAL_MM_ZH_ID = P_RML_ID
                                                                               );
                                  
                 ELSIF  P_DESIGNATION ='SC' THEN
                      Select COUNT(ID) INTO V_TOTAL_COUNT 
                       from SAL_LEADS_GEN
                           WHERE trunc(VISIT_DATE)=TRUNC(SYSDATE)
                           AND  ENTRY_BY=P_RML_ID
                            AND STATUS IS NULL
                           AND INTERESTED_MODEL=P_PRODUCT_TYPE;                                                                                     
                 END IF;
                                                                      
          
           ELSIF  P_USER_WANT ='FOLLOW_UP_MISS'  THEN
                 IF P_DESIGNATION ='BH' THEN
                         SELECT COUNT(ID) INTO V_TOTAL_COUNT 
                                 FROM SAL_LEADS_GEN
                                WHERE trunc(VISIT_DATE)<TRUNC(SYSDATE)
                                AND TRUNC (ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                AND STATUS IS NULL
                               AND INTERESTED_MODEL=P_PRODUCT_TYPE;
                 ELSIF  P_DESIGNATION ='PH' THEN
                          SELECT COUNT(ID) INTO V_TOTAL_COUNT 
                                 FROM SAL_LEADS_GEN
                                WHERE trunc(VISIT_DATE)<TRUNC(SYSDATE)
                                AND TRUNC (ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                 AND STATUS IS NULL
                               AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                AND  ENTRY_BY IN   (
                                                                    SELECT RML_ID from RML_COLL_APPS_USER
                                                                     WHERE SAL_MM_ZH_ID IN (
                                                                                                          SELECT ZH_ID FROM SAL_ZH_SETUP WHERE PH_ID=P_RML_ID
                                                                                                           )
                                                                );
                 ELSIF  P_DESIGNATION ='ZH' THEN
                           SELECT COUNT(ID) INTO V_TOTAL_COUNT 
                                 FROM SAL_LEADS_GEN
                                WHERE trunc(VISIT_DATE)<TRUNC(SYSDATE)
                                 AND TRUNC (ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                               AND INTERESTED_MODEL=P_PRODUCT_TYPE
                                AND STATUS IS NULL
                                AND  ENTRY_BY IN  (SELECT DISTINCT RML_ID
                                                                                 FROM RML_COLL_APPS_USER
                                                                                WHERE SAL_MM_ZH_ID = P_RML_ID
                                                                               );     
                 ELSIF  P_DESIGNATION ='SC' THEN
                         SELECT COUNT(ID) INTO V_TOTAL_COUNT 
                                 FROM SAL_LEADS_GEN
                                WHERE trunc(VISIT_DATE)<TRUNC(SYSDATE)
                                 AND TRUNC (ENTRY_DATE) BETWEEN P_START_DATE AND P_END_DATE
                                AND  ENTRY_BY=P_RML_ID
                                 AND STATUS IS NULL
                               AND INTERESTED_MODEL=P_PRODUCT_TYPE;                                              
                 END IF;
           
          END IF;

   
   RETURN V_TOTAL_COUNT;
    EXCEPTION
          WHEN OTHERS THEN
                         RETURN 0 ;
END;
/