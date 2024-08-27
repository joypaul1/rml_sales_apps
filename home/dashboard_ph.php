<?php
include_once ('../_helper/com_conn.php');

$monthSQL   = "SELECT MODE_TYPE,count(MODE_TYPE) TOTAL_NUMBER from SAL_LEADS_GEN
WHERE trunc(ENTRY_DATE) between SYSDATE-30 and SYSDATE
AND ENTRY_BY IN
    (SELECT RML_ID
        FROM RML_COLL_APPS_USER
        WHERE  ACCESS_APP = 'RML_SAL'
        AND IS_ACTIVE = 1
        AND LEASE_USER = 'SE'
        AND USER_TYPE = 'R-U'
    )
GROUP by MODE_TYPE
ORDER BY TOTAL_NUMBER DESC";

$monthlySQL = @oci_parse($objConnect, $monthSQL);
@oci_execute($monthlySQL);

// apaxChartData
$apaxChartData = [];
$salesSQL      = "SELECT PRODUCT_TYPE,count(PRODUCT_TYPE)  TOTAL_NUMBER
FROM SAL_LEADS_GEN
WHERE PRODUCT_TYPE NOT IN 'MFTBC'
AND ENTRY_BY IN
(SELECT RML_ID
    FROM RML_COLL_APPS_USER
    WHERE  ACCESS_APP = 'RML_SAL'
    AND IS_ACTIVE = 1
    AND LEASE_USER = 'SE'
    AND USER_TYPE = 'R-U'
)
GROUP BY  PRODUCT_TYPE
ORDER by TOTAL_NUMBER DESC";
$salesSQL      = @oci_parse($objConnect, $salesSQL);
@oci_execute($salesSQL);

while ($data = oci_fetch_assoc($salesSQL)) { // Fetch each row as an associative array
    $apaxChartData[] = array(
        'PRODUCT_TYPE' => $data['PRODUCT_TYPE'],
        'TOTAL_NUMBER' => $data['TOTAL_NUMBER']
    );
}
?>

<!--start page wrapper -->
<div class="row">
    <div class="col-xl-6 col-xxl-12">
        <div class="row">
            <?php
            $counter = 0; //
            while ($data = oci_fetch_assoc($monthlySQL)) {

                $bgColors   = array( "bgl-success", "bgl-secondary", "bgl-info", "bgl-warning", "bgl-danger" );
                $bgColoros2 = array( "bg-success", "bg-secondary", "bg-info", "bg-warning", "bg-danger" );
                $bgColor    = $bgColors[$counter % count($bgColors)];
                $bgColor2   = $bgColoros2[$counter % count($bgColoros2)];
                $counter++;

                ?>
                <div class="col-sm-4">
                    <div class="card avtivity-card">
                        <div class="card-body2">
                            <div class="media align-items-center">
                                <span class="activity-icon <?= $bgColor ?> me-md-4 me-3">
                                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="51" height="51" rx="25.5" fill="#0B2A97"></rect>
                                        <g clip-path="url()">
                                            <path
                                                d="M23.8586 19.226L18.8712 24.5542C18.5076 25.0845 18.6439 25.8068 19.1717 26.1679L24.1945 29.6098L24.1945 32.9558C24.1945 33.5921 24.6995 34.125 25.3359 34.1376C25.9874 34.1477 26.5177 33.6249 26.5177 32.976L26.5177 29.0012C26.5177 28.6174 26.3283 28.2588 26.0126 28.0442L22.7904 25.8346L25.5025 22.9583L26.8914 26.1225C27.0758 26.5442 27.4949 26.8169 27.9546 26.8169L32.1844 26.8169C32.8207 26.8169 33.3536 26.3119 33.3662 25.6755C33.3763 25.024 32.8536 24.4937 32.2046 24.4937L28.7172 24.4937C28.2576 23.4482 27.7677 22.4129 27.3409 21.3522C27.1237 20.8169 27.0025 20.5846 26.6036 20.2159C26.5227 20.1401 25.9596 19.625 25.4571 19.1654C24.995 18.7462 24.2828 18.7739 23.8586 19.226Z"
                                                fill="white"></path>
                                            <path
                                                d="M28.6162 19.8068C30.0861 19.8068 31.2778 18.6151 31.2778 17.1452C31.2778 15.6752 30.0861 14.4836 28.6162 14.4836C27.1462 14.4836 25.9545 15.6752 25.9545 17.1452C25.9545 18.6151 27.1462 19.8068 28.6162 19.8068Z"
                                                fill="white"></path>
                                            <path
                                                d="M17.899 37.5164C20.6046 37.5164 22.798 35.323 22.798 32.6174C22.798 29.9117 20.6046 27.7184 17.899 27.7184C15.1934 27.7184 13 29.9117 13 32.6174C13 35.323 15.1934 37.5164 17.899 37.5164Z"
                                                fill="white"></path>
                                            <path
                                                d="M32.101 37.5164C34.8066 37.5164 37 35.323 37 32.6174C37 29.9118 34.8066 27.7184 32.101 27.7184C29.3954 27.7184 27.202 29.9118 27.202 32.6174C27.202 35.323 29.3954 37.5164 32.101 37.5164Z"
                                                fill="white"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip8">
                                                <rect width="24" height="24" fill="white" transform="translate(13 14)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="fs-14">Criteria OF Inquiry :
                                        <strong>
                                            <u class="text-primary">
                                                <?= $data['MODE_TYPE'] ?>
                                            </u>
                                        </strong>
                                        <br>Last 30 Days
                                    </p>

                                    <span class="title text-black font-w600 text-primary"><?= $data['TOTAL_NUMBER'] ?></span>
                                </div>
                            </div>

                        </div>
                        <div class="effect <?= $bgColor2 ?>" style="top: -4px; left: -1.00003px;"></div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<div class="col-xl-12">
    <div class="card">
        <div class="card-header d-sm-flex d-block pb-0 border-0">
            <div class="me-auto pe-3">
                <h4 class="text-black fs-20"><i class="flaticon-381-album-3"></i> Lead Summary</h4>
                <p class="fs-13 mb-0">According To Your Lead Entry Data <i class="flaticon-381-database-2"></i></p>
            </div>
            <div class="card-action card-tabs style-1 mt-2 mb-sm-0 mb-3 mt-sm-0">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#Running" role="tab">
                            <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M0.988957 17.074C0.328275 17.2006 -0.104585 17.8385 0.0219823 18.4992C0.133362 19.0814 0.644694 19.4864 1.21678 19.4864C1.29272 19.4864 1.37119 19.4788 1.44713 19.4636L6.4592 18.5017C6.74524 18.446 7.00091 18.2916 7.18316 18.0638L9.33481 15.3502L8.61593 14.9832C8.08435 14.7148 7.71475 14.2288 7.58818 13.639L5.55804 16.1982L0.988957 17.074Z"
                                        fill="#A639FA" />
                                    <path
                                        d="M18.84 6.493C20.3135 6.493 21.508 5.29848 21.508 3.82496C21.508 2.35144 20.3135 1.15692 18.84 1.15692C17.3665 1.15692 16.1719 2.35144 16.1719 3.82496C16.1719 5.29848 17.3665 6.493 18.84 6.493Z"
                                        fill="#A639FA" />
                                    <path
                                        d="M13.0179 3.15671C12.7369 2.86813 12.4762 2.75422 12.1902 2.75422C12.0864 2.75422 11.9826 2.76941 11.8712 2.79472L7.29203 3.88067C6.6592 4.03002 6.26937 4.66539 6.41872 5.29569C6.54782 5.8374 7.02877 6.20192 7.56289 6.20192C7.65404 6.20192 7.74514 6.19179 7.8363 6.16901L11.7371 5.24507C11.9902 5.52605 13.2584 6.90057 13.4888 7.14358C11.8763 8.86996 10.2639 10.5938 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4037C8.10966 13.0036 8.25397 13.9453 8.96275 14.3022L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3063 11.7371 22.6607C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2658L16.6732 16.9829C16.8529 16.6918 16.901 16.34 16.8074 16.0134C16.7137 15.6843 16.4884 15.411 16.1821 15.2565L12.8331 13.5529L16.3543 9.7863L19.0122 12.0392C19.2324 12.2265 19.5032 12.3176 19.7716 12.3176C20.0601 12.3176 20.3487 12.2113 20.574 12.0038L23.6243 9.16106C24.1002 8.71808 24.128 7.97386 23.685 7.49797C23.4521 7.24989 23.1383 7.12333 22.8244 7.12333C22.5383 7.12333 22.2497 7.22711 22.0245 7.43721L19.7412 9.56101C19.7386 9.56354 14.0178 4.1819 13.0179 3.15671Z"
                                        fill="#A639FA" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Last 30 Days
                            <span class="bg-secondary"></span>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#Cycling" role="tab">
                            <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.8586 5.22599L5.87121 10.5543C5.50758 11.0846 5.64394 11.8068 6.17172 12.1679L11.1945 15.6098V18.9558C11.1945 19.5921 11.6995 20.125 12.3359 20.1376C12.9874 20.1477 13.5177 19.625 13.5177 18.976V15.0013C13.5177 14.6174 13.3283 14.2588 13.0126 14.0442L9.79041 11.8346L12.5025 8.95836L13.8914 12.1225C14.0758 12.5442 14.4949 12.817 14.9546 12.817H19.1844C19.8207 12.817 20.3536 12.3119 20.3662 11.6755C20.3763 11.024 19.8536 10.4937 19.2046 10.4937H15.7172C15.2576 9.44824 14.7677 8.41288 14.3409 7.35228C14.1237 6.81693 14.0025 6.5846 13.6036 6.21592C13.5227 6.14016 12.9596 5.62501 12.4571 5.16541C11.995 4.74619 11.2828 4.77397 10.8586 5.22599Z" fill="#FF3282" />
                                <path d="M15.6162 5.80681C17.0861 5.80681 18.2778 4.61517 18.2778 3.1452C18.2778 1.67523 17.0861 0.483582 15.6162 0.483582C14.1462 0.483582 12.9545 1.67523 12.9545 3.1452C12.9545 4.61517 14.1462 5.80681 15.6162 5.80681Z" fill="#FF3282" />
                                <path d="M4.89899 23.5164C7.60463 23.5164 9.79798 21.3231 9.79798 18.6174C9.79798 15.9118 7.60463 13.7184 4.89899 13.7184C2.19335 13.7184 0 15.9118 0 18.6174C0 21.3231 2.19335 23.5164 4.89899 23.5164Z" fill="#FF3282" />
                                <path d="M19.101 23.5164C21.8066 23.5164 24 21.3231 24 18.6174C24 15.9118 21.8066 13.7184 19.101 13.7184C16.3954 13.7184 14.202 15.9118 14.202 18.6174C14.202 21.3231 16.3954 23.5164 19.101 23.5164Z" fill="#FF3282" />
                            </svg>
                            All Data
                            <span class="bg-danger"></span>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="card-body pb-0">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Running" role="tabpanel">
                    <div id="chartBarRunning"></div>
                </div>
                <div class="tab-pane fade" id="Cycling" role="tabpanel">
                    <div id="chartBarCycle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--end page wrapper -->

<?php

include_once ('../_includes/footer_info.php');
include_once ('../_includes/footer.php');
?>
<script>
    $('#start_date').datepicker({
        format: "dd-MM-yyyy",
        // startView: 2,
        // minViewMode: 1,
        // maxViewMode: 2,
        autoclose: true,
        todayHighlight: true,
    });
    $('#end_date').datepicker({
        format: "dd-MM-yyyy",
        // startView: 2,
        // minViewMode: 1,
        // maxViewMode: 2,
        autoclose: true,
        todayHighlight: true,
    });
    var apaxChartData = <?php echo json_encode($apaxChartData) ?>;

    (function ($) {

        /* "use strict" */
        var dzChartlist = function () {
            // let draw = Chart.controllers.line.__super__.draw; //draw shadow
            var screenWidth = $(window).width();
            var chartBarRunning = function () {

                var chartBarRunningOptions = {
                    series: [{
                        name: 'TOTAL',
                        data: apaxChartData.map(function (entry) {
                            return entry.TOTAL_NUMBER;
                        })
                    },

                    ],
                    chart: {
                        type: 'bar',
                        height: 370,

                        toolbar: {
                            show: false,
                        },

                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            endingShape: "flat",
                            borderRadius: 5,
                            columnWidth: '50%',

                        },
                    },
                    colors: ['#70349D'],
                    dataLabels: {
                        enabled: false,
                    },
                    markers: {
                        shape: "circle",
                    },
                    legend: {
                        show: false,
                        fontSize: '12px',
                        labels: {
                            colors: '#000000',

                        },
                        markers: {
                            width: 18,
                            height: 18,
                            strokeWidth: 0,
                            strokeColor: '#fff',
                            fillColors: undefined,
                            radius: 12,
                        }
                    },
                    stroke: {
                        show: true,
                        width: 6,
                        colors: ['transparent']
                    },
                    grid: {
                        borderColor: '#eee',
                    },
                    xaxis: {

                        categories: apaxChartData.map(function (entry) {
                            return entry.PRODUCT_TYPE;
                        }),
                        labels: {
                            style: {
                                colors: '#787878',
                                fontSize: '13px',
                                fontFamily: 'poppins',
                                fontWeight: 100,
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                        axisTicks: {
                            show: false,
                        },
                        crosshairs: {
                            show: false,
                        }
                    },
                    yaxis: {
                        labels: {

                            offsetX: -16,
                            style: {
                                colors: '#787878',
                                fontSize: '13px',
                                fontFamily: 'poppins',
                                fontWeight: 100,
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },
                    fill: {
                        opacity: 1,
                        colors: ['#70349D'],
                    },

                    responsive: [{
                        breakpoint: 575,
                        options: {
                            plotOptions: {
                                bar: {
                                    columnWidth: '40%',

                                },
                            },
                            chart: {
                                height: 250,
                            }
                        }
                    }]
                };

                var chartBarRunningObject = new ApexCharts(document.querySelector("#chartBarRunning"), chartBarRunningOptions);
                chartBarRunningObject.render();

            }


            var chartBarCycle = function () {

                var chartBarCycleOptions = {
                    series: [{
                        name: 'Cycling',
                        data: [80, 40, 55, 20, 45, 30, 80, 90, 85, 90, 30, 85]
                    },

                    ],
                    chart: {
                        type: 'bar',
                        height: 370,

                        toolbar: {
                            show: false,
                        },

                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            endingShape: 'rounded',
                            borderRadius: 5,
                            columnWidth: '50%',

                        },
                    },
                    colors: ['#FF3282'],
                    dataLabels: {
                        enabled: false,
                    },
                    markers: {
                        shape: "circle",
                    },
                    legend: {
                        show: false,
                        fontSize: '12px',
                        labels: {
                            colors: '#000000',

                        },
                        markers: {
                            width: 18,
                            height: 18,
                            strokeWidth: 0,
                            strokeColor: '#fff',
                            fillColors: undefined,
                            radius: 12,
                        }
                    },
                    stroke: {
                        show: true,
                        width: 6,
                        colors: ['transparent']
                    },
                    grid: {
                        borderColor: '#eee',
                    },
                    xaxis: {

                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        labels: {
                            style: {
                                colors: '#787878',
                                fontSize: '13px',
                                fontFamily: 'poppins',
                                fontWeight: 100,
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                        axisTicks: {
                            show: false,

                        },
                        crosshairs: {
                            show: false,
                        }
                    },
                    yaxis: {
                        labels: {
                            offsetX: -16,
                            style: {
                                colors: '#787878',
                                fontSize: '13px',
                                fontFamily: 'poppins',
                                fontWeight: 100,
                                cssClass: 'apexcharts-xaxis-label',
                            },
                        },
                    },
                    fill: {
                        opacity: 1,
                        colors: ['#FF3282'],
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return "$ " + val + " thousands"
                            }
                        }
                    },
                    responsive: [{
                        breakpoint: 575,
                        options: {
                            plotOptions: {
                                bar: {
                                    columnWidth: '40%',

                                },
                            },
                            chart: {
                                height: 250,
                            }
                        }
                    }]
                };

                var chartBarCycleObject = new ApexCharts(document.querySelector("#chartBarCycle"), chartBarCycleOptions);
                chartBarCycleObject.render();
            }
            /* Function ============ */
            return {
                init: function () { },


                load: function () {
                    chartBarRunning();
                    // chartBarCycle();
                },

                resize: function () {

                }
            }

        }();

        jQuery(document).ready(function () { });

        jQuery(window).on('load', function () {
            setTimeout(function () {
                dzChartlist.load();
            }, 1000);

        });

        jQuery(window).on('resize', function () {


        });

    })(jQuery);
</script>