<?php
include_once('../_helper/com_conn.php');


$monthSQL = "SELECT MODE_TYPE,count(MODE_TYPE) TOTAL_NUMBER from SAL_LEADS_GEN
where trunc(ENTRY_DATE) between SYSDATE-30 and SYSDATE
group by MODE_TYPE
ORDER BY TOTAL_NUMBER DESC";
$monthlySQL = @oci_parse($objConnect, $monthSQL);
@oci_execute($monthlySQL);
//  @oci_fetch_assoc($strSQL);
// print_r($monthlyData);
?>

<!--start page wrapper -->
<div class="row">
    <div class="col-xl-6 col-xxl-12">
        <div class="row">
            <?php
            $counter = 0; //
            while ($data = oci_fetch_assoc($monthlySQL)) {

                $bgColors   = array("bgl-success", "bgl-secondary", "bgl-info", "bgl-warning", "bgl-danger");
                $bgColoros2 = array("bg-success",  "bg-secondary", "bg-info",  "bg-warning",  "bg-danger");
                $bgColor = $bgColors[$counter % count($bgColors)];
                $bgColor2 = $bgColoros2[$counter % count($bgColoros2)];
                $counter++;

            ?>
                <div class="col-sm-4">
                    <div class="card avtivity-card">
                        <div class="card-body2">
                            <div class="media align-items-center">
                                <span class="activity-icon <?= $bgColor ?> me-md-4 me-3">
                                    <svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.64826 26.5285C0.547125 26.7394 -0.174308 27.8026 0.0366371 28.9038C0.222269 29.8741 1.07449 30.5491 2.02796 30.5491C2.15453 30.5491 2.28531 30.5364 2.41188 30.5112L10.7653 28.908C11.242 28.8152 11.6682 28.5578 11.9719 28.1781L15.558 23.6554L14.3599 23.0437C13.4739 22.5965 12.8579 21.7865 12.6469 20.8035L9.26338 25.0688L1.64826 26.5285Z" fill="#A02CFA"></path>
                                        <path d="M31.3999 8.89345C33.8558 8.89345 35.8467 6.90258 35.8467 4.44673C35.8467 1.99087 33.8558 0 31.3999 0C28.9441 0 26.9532 1.99087 26.9532 4.44673C26.9532 6.90258 28.9441 8.89345 31.3999 8.89345Z" fill="#A02CFA"></path>
                                        <path d="M21.6965 3.33297C21.2282 2.85202 20.7937 2.66217 20.3169 2.66217C20.1439 2.66217 19.971 2.68748 19.7853 2.72967L12.1534 4.53958C11.0986 4.78849 10.4489 5.84744 10.6979 6.89795C10.913 7.80079 11.7146 8.40831 12.6048 8.40831C12.7567 8.40831 12.9086 8.39144 13.0605 8.35347L19.5618 6.81357C19.9837 7.28187 22.0974 9.57273 22.4813 9.97775C19.7938 12.855 17.1064 15.7281 14.4189 18.6054C14.3767 18.6519 14.3388 18.6982 14.3008 18.7446C13.5161 19.7445 13.7566 21.3139 14.9379 21.9088L23.1774 26.1151L18.8994 33.0467C18.313 34.0002 18.6083 35.249 19.5618 35.8396C19.8951 36.0464 20.2621 36.1434 20.6249 36.1434C21.3042 36.1434 21.9707 35.8017 22.3547 35.1815L27.7886 26.3766C28.0882 25.8915 28.1683 25.305 28.0122 24.7608C27.8561 24.2123 27.4806 23.7567 26.9702 23.4993L21.3885 20.66L27.2571 14.3823L31.6869 18.1371C32.0539 18.4493 32.5054 18.6012 32.9526 18.6012C33.4335 18.6012 33.9145 18.424 34.2899 18.078L39.3737 13.3402C40.1669 12.6019 40.2133 11.3615 39.475 10.5684C39.0868 10.1549 38.5637 9.944 38.0406 9.944C37.5638 9.944 37.0829 10.117 36.7074 10.4671L32.9019 14.0068C32.8977 14.011 23.363 5.04163 21.6965 3.33297Z" fill="#A02CFA"></path>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="fs-14">Criteria OF Inquiry : <strong><u><?= $data['MODE_TYPE'] ?></u></strong></p>
                                    <span class="title text-black font-w600"><?= $data['TOTAL_NUMBER'] ?></span>
                                </div>
                            </div>
                            <center> <small>[Criteria wise Last 30 Days]</small></center>
                        </div>
                        <div class="effect <?= $bgColor2 ?>" style="top: -4px; left: -1.00003px;"></div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header d-sm-flex d-block pb-0 border-0">
                <div class="me-auto pe-3">
                    <h4 class="text-black fs-20">Stats</h4>
                    <p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
                <div class="card-action card-tabs style-1 mt-2 mb-sm-0 mb-3 mt-sm-0">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#Running" role="tab">
                                <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M0.988957 17.074C0.328275 17.2006 -0.104585 17.8385 0.0219823 18.4992C0.133362 19.0814 0.644694 19.4864 1.21678 19.4864C1.29272 19.4864 1.37119 19.4788 1.44713 19.4636L6.4592 18.5017C6.74524 18.446 7.00091 18.2916 7.18316 18.0638L9.33481 15.3502L8.61593 14.9832C8.08435 14.7148 7.71475 14.2288 7.58818 13.639L5.55804 16.1982L0.988957 17.074Z" fill="#A639FA" />
                                        <path d="M18.84 6.493C20.3135 6.493 21.508 5.29848 21.508 3.82496C21.508 2.35144 20.3135 1.15692 18.84 1.15692C17.3665 1.15692 16.1719 2.35144 16.1719 3.82496C16.1719 5.29848 17.3665 6.493 18.84 6.493Z" fill="#A639FA" />
                                        <path d="M13.0179 3.15671C12.7369 2.86813 12.4762 2.75422 12.1902 2.75422C12.0864 2.75422 11.9826 2.76941 11.8712 2.79472L7.29203 3.88067C6.6592 4.03002 6.26937 4.66539 6.41872 5.29569C6.54782 5.8374 7.02877 6.20192 7.56289 6.20192C7.65404 6.20192 7.74514 6.19179 7.8363 6.16901L11.7371 5.24507C11.9902 5.52605 13.2584 6.90057 13.4888 7.14358C11.8763 8.86996 10.2639 10.5938 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4037C8.10966 13.0036 8.25397 13.9453 8.96275 14.3022L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3063 11.7371 22.6607C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2658L16.6732 16.9829C16.8529 16.6918 16.901 16.34 16.8074 16.0134C16.7137 15.6843 16.4884 15.411 16.1821 15.2565L12.8331 13.5529L16.3543 9.7863L19.0122 12.0392C19.2324 12.2265 19.5032 12.3176 19.7716 12.3176C20.0601 12.3176 20.3487 12.2113 20.574 12.0038L23.6243 9.16106C24.1002 8.71808 24.128 7.97386 23.685 7.49797C23.4521 7.24989 23.1383 7.12333 22.8244 7.12333C22.5383 7.12333 22.2497 7.22711 22.0245 7.43721L19.7412 9.56101C19.7386 9.56354 14.0178 4.1819 13.0179 3.15671Z" fill="#A639FA" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Running
                                <span class="bg-secondary"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#Cycling" role="tab">
                                <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8586 5.22599L5.87121 10.5543C5.50758 11.0846 5.64394 11.8068 6.17172 12.1679L11.1945 15.6098V18.9558C11.1945 19.5921 11.6995 20.125 12.3359 20.1376C12.9874 20.1477 13.5177 19.625 13.5177 18.976V15.0013C13.5177 14.6174 13.3283 14.2588 13.0126 14.0442L9.79041 11.8346L12.5025 8.95836L13.8914 12.1225C14.0758 12.5442 14.4949 12.817 14.9546 12.817H19.1844C19.8207 12.817 20.3536 12.3119 20.3662 11.6755C20.3763 11.024 19.8536 10.4937 19.2046 10.4937H15.7172C15.2576 9.44824 14.7677 8.41288 14.3409 7.35228C14.1237 6.81693 14.0025 6.5846 13.6036 6.21592C13.5227 6.14016 12.9596 5.62501 12.4571 5.16541C11.995 4.74619 11.2828 4.77397 10.8586 5.22599Z" fill="#FF3282" />
                                    <path d="M15.6162 5.80681C17.0861 5.80681 18.2778 4.61517 18.2778 3.1452C18.2778 1.67523 17.0861 0.483582 15.6162 0.483582C14.1462 0.483582 12.9545 1.67523 12.9545 3.1452C12.9545 4.61517 14.1462 5.80681 15.6162 5.80681Z" fill="#FF3282" />
                                    <path d="M4.89899 23.5164C7.60463 23.5164 9.79798 21.3231 9.79798 18.6174C9.79798 15.9118 7.60463 13.7184 4.89899 13.7184C2.19335 13.7184 0 15.9118 0 18.6174C0 21.3231 2.19335 23.5164 4.89899 23.5164Z" fill="#FF3282" />
                                    <path d="M19.101 23.5164C21.8066 23.5164 24 21.3231 24 18.6174C24 15.9118 21.8066 13.7184 19.101 13.7184C16.3954 13.7184 14.202 15.9118 14.202 18.6174C14.202 21.3231 16.3954 23.5164 19.101 23.5164Z" fill="#FF3282" />
                                </svg>
                                Cycling
                                <span class="bg-danger"></span>
                            </a>
                        </li>
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

include_once('../_includes/footer_info.php');
include_once('../_includes/footer.php');
?>
<script>
    (function($) {
        /* "use strict" */


        var dzChartlist = function() {
            //let draw = Chart.controllers.line.__super__.draw; //draw shadow
            var screenWidth = $(window).width();
            var chartBarRunning = function() {

                var chartBarRunningOptions = {
                    series: [{
                            name: 'Running',
                            data: [50, 18, 70, 40, 90, 70, 20, 75, 80, 25, 70, 45],
                        },
                        {
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
                            endingShape: "flat",
                            borderRadius: 5,
                            columnWidth: '50%',

                        },
                    },
                    colors: ['#70349D', '#FF3282'],
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
                        colors: ['#70349D', '#FF3282'],
                    },
                    tooltip: {
                        y: {
                            formatter: function(val) {
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

                var chartBarRunningObject = new ApexCharts(document.querySelector("#chartBarRunning"), chartBarRunningOptions);
                chartBarRunningObject.render();

            }


            var chartBarCycle = function() {

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
                            formatter: function(val) {
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
                init: function() {},


                load: function() {
                    chartBarRunning();
                    chartBarCycle();
                },

                resize: function() {

                }
            }

        }();

        jQuery(document).ready(function() {});

        jQuery(window).on('load', function() {
            setTimeout(function() {
                dzChartlist.load();
            }, 1000);

        });

        jQuery(window).on('resize', function() {


        });

    })(jQuery);
</script>