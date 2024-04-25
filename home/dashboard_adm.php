<?php
include_once('../_helper/com_conn.php');

?>

<!--start page wrapper -->
<div class="row">
    <div class="col-xl-6 col-xxl-12">
        <div class="row">
            <div class="col-sm-6">
                <div class="card avtivity-card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <span class="activity-icon bgl-success me-md-4 me-3">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip2)">
                                        <path d="M14.6406 24.384C14.4639 24.1871 14.421 23.904 14.5305 23.6633C15.9635 20.513 14.4092 18.7501 14.564 11.6323C14.5713 11.2944 14.8346 10.9721 15.2564 10.9801C15.6201 10.987 15.905 11.2962 15.8971 11.6598C15.8902 11.9762 15.8871 12.2939 15.8875 12.6123C15.888 12.9813 16.1893 13.2826 16.5583 13.2776C17.6426 13.2628 19.752 12.9057 20.5684 10.4567L20.9744 9.23876C21.7257 6.9847 20.4421 4.55115 18.1335 3.91572L13.9816 2.77294C12.3274 2.31768 10.5363 2.94145 9.52387 4.32498C4.66826 10.9599 1.44452 18.5903 0.0754914 26.6727C-0.300767 28.8937 0.754757 31.1346 2.70222 32.2488C13.6368 38.5051 26.6023 39.1113 38.35 33.6379C39.3524 33.1709 40.0002 32.1534 40.0002 31.0457V19.1321C40.0002 18.182 39.5322 17.2976 38.7484 16.7664C34.5339 13.91 29.1672 14.2521 25.5723 18.0448C25.2519 18.3828 25.3733 18.937 25.8031 19.1166C27.4271 19.7957 28.9625 20.7823 30.2439 21.9475C30.5225 22.2008 30.542 22.6396 30.2654 22.9155C30.0143 23.1658 29.6117 23.1752 29.3485 22.9376C25.9907 19.9053 21.4511 18.5257 16.935 19.9686C16.658 20.0571 16.4725 20.3193 16.477 20.61C16.496 21.8194 16.294 22.9905 15.7421 24.2172C15.5453 24.6544 14.9607 24.7409 14.6406 24.384Z" fill="#27BC48"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip2">
                                            <rect width="40" height="40" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <div class="media-body">
                                <p class="fs-14 mb-2">Weekly Progress</p>
                                <span class="title text-black font-w600">42%</span>
                            </div>
                        </div>
                        <div class="progress" style="height:5px;">
                            <div class="progress-bar bg-success" style="width: 42%; height:5px;" aria-label="Progess-success" role="progressbar">
                                <span class="sr-only">42% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="effect bg-success" style="top: -4px; left: -1.00003px;"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card avtivity-card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <span class="activity-icon bgl-secondary  me-md-4 me-3">
                                <svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.64826 26.5285C0.547125 26.7394 -0.174308 27.8026 0.0366371 28.9038C0.222269 29.8741 1.07449 30.5491 2.02796 30.5491C2.15453 30.5491 2.28531 30.5364 2.41188 30.5112L10.7653 28.908C11.242 28.8152 11.6682 28.5578 11.9719 28.1781L15.558 23.6554L14.3599 23.0437C13.4739 22.5965 12.8579 21.7865 12.6469 20.8035L9.26338 25.0688L1.64826 26.5285Z" fill="#A02CFA"></path>
                                    <path d="M31.3999 8.89345C33.8558 8.89345 35.8467 6.90258 35.8467 4.44673C35.8467 1.99087 33.8558 0 31.3999 0C28.9441 0 26.9532 1.99087 26.9532 4.44673C26.9532 6.90258 28.9441 8.89345 31.3999 8.89345Z" fill="#A02CFA"></path>
                                    <path d="M21.6965 3.33297C21.2282 2.85202 20.7937 2.66217 20.3169 2.66217C20.1439 2.66217 19.971 2.68748 19.7853 2.72967L12.1534 4.53958C11.0986 4.78849 10.4489 5.84744 10.6979 6.89795C10.913 7.80079 11.7146 8.40831 12.6048 8.40831C12.7567 8.40831 12.9086 8.39144 13.0605 8.35347L19.5618 6.81357C19.9837 7.28187 22.0974 9.57273 22.4813 9.97775C19.7938 12.855 17.1064 15.7281 14.4189 18.6054C14.3767 18.6519 14.3388 18.6982 14.3008 18.7446C13.5161 19.7445 13.7566 21.3139 14.9379 21.9088L23.1774 26.1151L18.8994 33.0467C18.313 34.0002 18.6083 35.249 19.5618 35.8396C19.8951 36.0464 20.2621 36.1434 20.6249 36.1434C21.3042 36.1434 21.9707 35.8017 22.3547 35.1815L27.7886 26.3766C28.0882 25.8915 28.1683 25.305 28.0122 24.7608C27.8561 24.2123 27.4806 23.7567 26.9702 23.4993L21.3885 20.66L27.2571 14.3823L31.6869 18.1371C32.0539 18.4493 32.5054 18.6012 32.9526 18.6012C33.4335 18.6012 33.9145 18.424 34.2899 18.078L39.3737 13.3402C40.1669 12.6019 40.2133 11.3615 39.475 10.5684C39.0868 10.1549 38.5637 9.944 38.0406 9.944C37.5638 9.944 37.0829 10.117 36.7074 10.4671L32.9019 14.0068C32.8977 14.011 23.363 5.04163 21.6965 3.33297Z" fill="#A02CFA"></path>
                                </svg>
                            </span>
                            <div class="media-body">
                                <p class="fs-14 mb-2">Weekly Running</p>
                                <span class="title text-black font-w600">42km</span>
                            </div>
                        </div>
                        <div class="progress" style="height:5px;">
                            <div class="progress-bar bg-secondary" style="width: 82%; height:5px;" aria-label="Progess-secondary" role="progressbar">
                                <span class="sr-only">42% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="effect bg-secondary"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card avtivity-card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <span class="activity-icon bgl-danger me-md-4 me-3">
                                <svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.0977 7.90402L9.78535 16.7845C9.17929 17.6683 9.40656 18.872 10.2862 19.4738L18.6574 25.2104V30.787C18.6574 31.8476 19.4992 32.7357 20.5598 32.7568C21.6456 32.7735 22.5295 31.9023 22.5295 30.8207V24.1961C22.5295 23.5564 22.2138 22.9588 21.6877 22.601L16.3174 18.9184L20.8376 14.1246L23.1524 19.3982C23.4596 20.101 24.1582 20.5556 24.9243 20.5556H31.974C33.0346 20.5556 33.9226 19.7139 33.9437 18.6532C33.9605 17.5674 33.0893 16.6835 32.0076 16.6835H26.1953C25.4293 14.9411 24.6128 13.2155 23.9015 11.4478C23.5395 10.5556 23.3376 10.1684 22.6726 9.55389C22.5379 9.42763 21.5993 8.56904 20.7618 7.80305C19.9916 7.10435 18.8047 7.15065 18.0977 7.90402Z" fill="#FF3282"></path>
                                    <path d="M26.0269 8.87206C28.4769 8.87206 30.463 6.88598 30.463 4.43603C30.463 1.98608 28.4769 0 26.0269 0C23.577 0 21.5909 1.98608 21.5909 4.43603C21.5909 6.88598 23.577 8.87206 26.0269 8.87206Z" fill="#FF3282"></path>
                                    <path d="M8.16498 38.388C12.6744 38.388 16.33 34.7325 16.33 30.2231C16.33 25.7137 12.6744 22.0581 8.16498 22.0581C3.65559 22.0581 0 25.7137 0 30.2231C0 34.7325 3.65559 38.388 8.16498 38.388Z" fill="#FF3282"></path>
                                    <path d="M31.835 38.388C36.3444 38.388 40 34.7325 40 30.2231C40 25.7137 36.3444 22.0581 31.835 22.0581C27.3256 22.0581 23.67 25.7137 23.67 30.2231C23.67 34.7325 27.3256 38.388 31.835 38.388Z" fill="#FF3282"></path>
                                </svg>
                            </span>
                            <div class="media-body">
                                <p class="fs-14 mb-2">Daily Cycling</p>
                                <span class="title text-black font-w600">230 Km</span>
                            </div>
                        </div>
                        <div class="progress" style="height:5px;">
                            <div class="progress-bar bg-danger" style="width: 90%; height:5px;" aria-label="Progess-danger" role="progressbar">
                                <span class="sr-only">42% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="effect bg-danger" style="top: 112px; left: 609px;"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card avtivity-card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <span class="activity-icon bgl-warning  me-md-4 me-3">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.9996 10.0001C22.7611 10.0001 24.9997 7.76148 24.9997 5.00004C24.9997 2.23859 22.7611 0 19.9996 0C17.2382 0 14.9996 2.23859 14.9996 5.00004C14.9996 7.76148 17.2382 10.0001 19.9996 10.0001Z" fill="#FFBC11"></path>
                                    <path d="M29.7178 36.3838L23.5603 38.6931L26.6224 39.8414C27.9402 40.3307 29.3621 39.6527 29.8413 38.3778C30.0964 37.6976 30.021 36.9851 29.7178 36.3838Z" fill="#FFBC11"></path>
                                    <path d="M8.37771 27.6588C7.08745 27.1803 5.64452 27.8298 5.15873 29.1224C4.67411 30.4151 5.32967 31.8555 6.62228 32.3413L9.31945 33.3527L16.4402 30.6821L8.37771 27.6588Z" fill="#FFBC11"></path>
                                    <path d="M34.8413 29.1225C34.3554 27.8297 32.9126 27.1803 31.6223 27.6589L11.6223 35.1589C10.3295 35.6448 9.67401 37.0852 10.1586 38.3779C10.6378 39.6524 12.0594 40.3309 13.3776 39.8415L33.3777 32.3414C34.6705 31.8556 35.326 30.4152 34.8413 29.1225Z" fill="#FFBC11"></path>
                                    <path d="M37.5001 20.0001H31.5455L27.2364 11.3819C26.7886 10.4871 25.8776 9.97737 24.9388 10.0001L19.9996 10.0001L15.061 10.0001C14.1223 9.97737 13.2125 10.4872 12.7637 11.3819L8.45457 20.0001H2.49998C1.1194 20.0001 0 21.1195 0 22.5001C0 23.8807 1.1194 25.0001 2.49998 25.0001H10C10.9473 25.0001 11.8128 24.4654 12.2363 23.6183L15 18.0909V27.4724L19.9998 29.3472L25 27.4719V18.0909L27.7637 23.6183C28.1873 24.4655 29.0528 25.0001 30 25.0001H37.5C38.8806 25.0001 40 23.8807 40 22.5001C40 21.1195 38.8807 20.0001 37.5001 20.0001Z" fill="#FFBC11"></path>
                                </svg>
                            </span>
                            <div class="media-body">
                                <p class="fs-14 mb-2">Morning Yoga</p>
                                <span class="title text-black font-w600">18:34:21</span>
                            </div>
                        </div>
                        <div class="progress" style="height:5px;">
                            <div class="progress-bar bg-warning" style="width: 42%; height:5px;" role="progressbar">
                                <span class="sr-only">42% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="effect bg-warning"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
        <div class="card">
            <div class="card-header d-sm-flex d-block pb-0 border-0">
                <div class="me-auto pe-3 mb-sm-0 mb-3">
                    <h4 class="text-black fs-20">Plan List</h4>
                    <p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
                </div>
                <div class="dropdown mb-3 show">
                    <button type="button" class="btn rounded btn-primary light" data-bs-toggle="dropdown" aria-expanded="true">
                        <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip5)">
                                <path d="M0.988957 17.0741C0.328275 17.2007 -0.104585 17.8386 0.0219823 18.4993C0.133362 19.0815 0.644694 19.4865 1.21678 19.4865C1.29272 19.4865 1.37119 19.4789 1.44713 19.4637L6.4592 18.5018C6.74524 18.4461 7.00091 18.2917 7.18316 18.0639L9.33481 15.3503L8.61593 14.9832C8.08435 14.7149 7.71475 14.2289 7.58818 13.6391L5.55804 16.1983L0.988957 17.0741Z" fill="#A02CFA"></path>
                                <path d="M18.84 6.49306C20.3135 6.49306 21.508 5.29854 21.508 3.82502C21.508 2.3515 20.3135 1.15698 18.84 1.15698C17.3665 1.15698 16.1719 2.3515 16.1719 3.82502C16.1719 5.29854 17.3665 6.49306 18.84 6.49306Z" fill="#A02CFA"></path>
                                <path d="M13.0179 3.15677C12.7369 2.86819 12.4762 2.75428 12.1902 2.75428C12.0864 2.75428 11.9826 2.76947 11.8712 2.79479L7.29203 3.88073C6.6592 4.03008 6.26937 4.66545 6.41872 5.29576C6.54782 5.83746 7.02877 6.20198 7.56289 6.20198C7.65404 6.20198 7.74514 6.19185 7.8363 6.16907L11.7371 5.24513C11.9902 5.52611 13.2584 6.90063 13.4888 7.14364C11.8763 8.87002 10.2639 10.5939 8.65137 12.3202C8.62605 12.3481 8.60329 12.3759 8.58049 12.4038C8.10966 13.0037 8.25397 13.9454 8.96275 14.3023L13.9064 16.826L11.3397 20.985C10.9878 21.5571 11.165 22.3064 11.7371 22.6608C11.9371 22.7848 12.1573 22.843 12.375 22.843C12.7825 22.843 13.1824 22.638 13.4128 22.2659L16.6732 16.983C16.8529 16.6919 16.901 16.34 16.8074 16.0135C16.7137 15.6844 16.4884 15.411 16.1821 15.2566L12.8331 13.553L16.3543 9.78636L19.0122 12.0393C19.2324 12.2266 19.5032 12.3177 19.7716 12.3177C20.0601 12.3177 20.3487 12.2114 20.574 12.0038L23.6243 9.16112C24.1002 8.71814 24.128 7.97392 23.685 7.49803C23.4521 7.24996 23.1383 7.12339 22.8244 7.12339C22.5383 7.12339 22.2497 7.22717 22.0245 7.43727L19.7412 9.56107C19.7386 9.56361 14.0178 4.18196 13.0179 3.15677Z" fill="#A02CFA"></path>
                            </g>
                            <defs>
                                <clipPath id="clip5">
                                    <rect width="24" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        Running
                        <svg class="ms-2" width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 0.999999L7 7L13 1" stroke="#0B2A97" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0 pb-0">
                <div id="chartBar" style="min-height: 415px;">
                    <div id="apexchartsms0q8eabj" class="apexcharts-canvas apexchartsms0q8eabj apexcharts-theme-light" style="width: 1041px; height: 400px;"><svg id="SvgjsSvg1521" width="1041" height="400" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                            <foreignObject x="0" y="0" width="1041" height="400">
                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 200px;"></div>
                            </foreignObject>
                            <rect id="SvgjsRect1526" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                            <g id="SvgjsG1590" class="apexcharts-yaxis" rel="0" transform="translate(0.7906341552734375, 0)">
                                <g id="SvgjsG1591" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1593" font-family="Poppins" x="20" y="31.6" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                        <tspan id="SvgjsTspan1594">160</tspan>
                                        <title>160</title>
                                    </text><text id="SvgjsText1596" font-family="Poppins" x="20" y="87.17111093966165" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                        <tspan id="SvgjsTspan1597">140</tspan>
                                        <title>140</title>
                                    </text><text id="SvgjsText1599" font-family="Poppins" x="20" y="142.7422218793233" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                        <tspan id="SvgjsTspan1600">120</tspan>
                                        <title>120</title>
                                    </text><text id="SvgjsText1602" font-family="Poppins" x="20" y="198.31333281898495" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                        <tspan id="SvgjsTspan1603">100</tspan>
                                        <title>100</title>
                                    </text><text id="SvgjsText1605" font-family="Poppins" x="20" y="253.8844437586466" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                        <tspan id="SvgjsTspan1606">80</tspan>
                                        <title>80</title>
                                    </text><text id="SvgjsText1608" font-family="Poppins" x="20" y="309.4555546983083" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                        <tspan id="SvgjsTspan1609">60</tspan>
                                        <title>60</title>
                                    </text><text id="SvgjsText1611" font-family="Poppins" x="20" y="365.0266656379699" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                        <tspan id="SvgjsTspan1612">40</tspan>
                                        <title>40</title>
                                    </text></g>
                            </g>
                            <g id="SvgjsG1523" class="apexcharts-inner apexcharts-graphical" transform="translate(46.79063415527344, 30)">
                                <defs id="SvgjsDefs1522">
                                    <clipPath id="gridRectMaskms0q8eabj">
                                        <rect id="SvgjsRect1528" width="980.0995273590088" height="336.42666563796996" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskms0q8eabj"></clipPath>
                                    <clipPath id="nonForecastMaskms0q8eabj"></clipPath>
                                    <clipPath id="gridRectMarkerMaskms0q8eabj">
                                        <rect id="SvgjsRect1529" width="977.0995273590088" height="337.42666563796996" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <filter id="SvgjsFilter1535" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                        <feFlood id="SvgjsFeFlood1536" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1536Out" in="SourceGraphic"></feFlood>
                                        <feComposite id="SvgjsFeComposite1537" in="SvgjsFeFlood1536Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1537Out"></feComposite>
                                        <feOffset id="SvgjsFeOffset1538" dx="0" dy="5" result="SvgjsFeOffset1538Out" in="SvgjsFeComposite1537Out"></feOffset>
                                        <feGaussianBlur id="SvgjsFeGaussianBlur1539" stdDeviation="3 " result="SvgjsFeGaussianBlur1539Out" in="SvgjsFeOffset1538Out"></feGaussianBlur>
                                        <feMerge id="SvgjsFeMerge1540" result="SvgjsFeMerge1540Out" in="SourceGraphic">
                                            <feMergeNode id="SvgjsFeMergeNode1541" in="SvgjsFeGaussianBlur1539Out"></feMergeNode>
                                            <feMergeNode id="SvgjsFeMergeNode1542" in="[object Arguments]"></feMergeNode>
                                        </feMerge>
                                        <feBlend id="SvgjsFeBlend1543" in="SourceGraphic" in2="SvgjsFeMerge1540Out" mode="normal" result="SvgjsFeBlend1543Out"></feBlend>
                                    </filter>
                                </defs>
                                <line id="SvgjsLine1527" x1="0" y1="0" x2="0" y2="333.42666563796996" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="333.42666563796996" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG1544" class="apexcharts-grid">
                                    <g id="SvgjsG1545" class="apexcharts-gridlines-horizontal">
                                        <line id="SvgjsLine1556" x1="0" y1="55.57111093966166" x2="973.0995273590088" y2="55.57111093966166" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1557" x1="0" y1="111.14222187932332" x2="973.0995273590088" y2="111.14222187932332" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1558" x1="0" y1="166.71333281898498" x2="973.0995273590088" y2="166.71333281898498" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1559" x1="0" y1="222.28444375864663" x2="973.0995273590088" y2="222.28444375864663" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1560" x1="0" y1="277.8555546983083" x2="973.0995273590088" y2="277.8555546983083" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1546" class="apexcharts-gridlines-vertical">
                                        <line id="SvgjsLine1548" x1="0" y1="0" x2="0" y2="333.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1549" x1="162.1832545598348" y1="0" x2="162.1832545598348" y2="333.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1550" x1="324.3665091196696" y1="0" x2="324.3665091196696" y2="333.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1551" x1="486.5497636795044" y1="0" x2="486.5497636795044" y2="333.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1552" x1="648.7330182393392" y1="0" x2="648.7330182393392" y2="333.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1553" x1="810.9162727991741" y1="0" x2="810.9162727991741" y2="333.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1554" x1="973.0995273590089" y1="0" x2="973.0995273590089" y2="333.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    </g>
                                    <line id="SvgjsLine1563" x1="0" y1="333.42666563796996" x2="973.0995273590088" y2="333.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                    <line id="SvgjsLine1562" x1="0" y1="1" x2="0" y2="333.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                </g>
                                <g id="SvgjsG1530" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG1531" class="apexcharts-series" seriesName="Distance" data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath1534" d="M 0 194.4988882888158C 56.76413909594217 194.4988882888158 105.41911546389261 111.1422218793233 162.18325455983478 111.1422218793233C 218.94739365577695 111.1422218793233 267.6023700237274 250.06999922847746 324.36650911966956 250.06999922847746C 381.13064821561176 250.06999922847746 429.7856245835622 83.3566664094925 486.5497636795044 83.3566664094925C 543.3139027754465 83.3566664094925 591.968879143397 222.28444375864663 648.7330182393391 222.28444375864663C 705.4971573352813 222.28444375864663 754.1521337032318 55.57111093966165 810.916272799174 55.57111093966165C 867.6804118951161 55.57111093966165 916.3353882630666 305.6411101681391 973.0995273590088 305.6411101681391" fill="none" fill-opacity="1" stroke="rgba(11,42,151,1)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskms0q8eabj)" filter="url(#SvgjsFilter1535)" pathTo="M 0 194.4988882888158C 56.76413909594217 194.4988882888158 105.41911546389261 111.1422218793233 162.18325455983478 111.1422218793233C 218.94739365577695 111.1422218793233 267.6023700237274 250.06999922847746 324.36650911966956 250.06999922847746C 381.13064821561176 250.06999922847746 429.7856245835622 83.3566664094925 486.5497636795044 83.3566664094925C 543.3139027754465 83.3566664094925 591.968879143397 222.28444375864663 648.7330182393391 222.28444375864663C 705.4971573352813 222.28444375864663 754.1521337032318 55.57111093966165 810.916272799174 55.57111093966165C 867.6804118951161 55.57111093966165 916.3353882630666 305.6411101681391 973.0995273590088 305.6411101681391" pathFrom="M -1 444.56888751729326 L -1 444.56888751729326 L 162.18325455983478 444.56888751729326 L 324.36650911966956 444.56888751729326 L 486.5497636795044 444.56888751729326 L 648.7330182393391 444.56888751729326 L 810.916272799174 444.56888751729326 L 973.0995273590088 444.56888751729326" fill-rule="evenodd"></path>
                                        <g id="SvgjsG1532" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0">
                                            <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle1616" r="0" cx="0" cy="0" class="apexcharts-marker wpdr8s1qki" stroke="#0b2a97" fill="#ffffff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1533" class="apexcharts-datalabels" data:realIndex="0"></g>
                                </g>
                                <g id="SvgjsG1547" class="apexcharts-grid-borders">
                                    <line id="SvgjsLine1555" x1="0" y1="0" x2="973.0995273590088" y2="0" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1561" x1="0" y1="333.42666563796996" x2="973.0995273590088" y2="333.42666563796996" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                    <line id="SvgjsLine1589" x1="0" y1="334.42666563796996" x2="973.0995273590088" y2="334.42666563796996" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                </g>
                                <line id="SvgjsLine1564" x1="0" y1="0" x2="973.0995273590088" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1565" x1="0" y1="0" x2="973.0995273590088" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1566" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1567" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1569" font-family="Poppins" x="0" y="362.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                            <tspan id="SvgjsTspan1570">Sun</tspan>
                                            <title>Sun</title>
                                        </text><text id="SvgjsText1572" font-family="Poppins" x="162.18325455983478" y="362.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                            <tspan id="SvgjsTspan1573">Mon</tspan>
                                            <title>Mon</title>
                                        </text><text id="SvgjsText1575" font-family="Poppins" x="324.3665091196696" y="362.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                            <tspan id="SvgjsTspan1576">Tue</tspan>
                                            <title>Tue</title>
                                        </text><text id="SvgjsText1578" font-family="Poppins" x="486.54976367950445" y="362.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                            <tspan id="SvgjsTspan1579">Wed</tspan>
                                            <title>Wed</title>
                                        </text><text id="SvgjsText1581" font-family="Poppins" x="648.7330182393393" y="362.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                            <tspan id="SvgjsTspan1582">Thu</tspan>
                                            <title>Thu</title>
                                        </text><text id="SvgjsText1584" font-family="Poppins" x="810.9162727991742" y="362.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                            <tspan id="SvgjsTspan1585">Fri</tspan>
                                            <title>Fri</title>
                                        </text><text id="SvgjsText1587" font-family="Poppins" x="973.0995273590089" y="362.42666563796996" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="50" fill="#818995" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                            <tspan id="SvgjsTspan1588">Sat</tspan>
                                            <title>Sat</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1613" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1614" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1615" class="apexcharts-point-annotations"></g>
                            </g>
                        </svg>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(11, 42, 151);"></span>
                                <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                            <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                        </div>
                        <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-xxl-8">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-sm-flex d-block pb-0 border-0">
                        <div class="me-auto pe-3">
                            <h4 class="text-black font-w600 fs-20">Recomended Trainer for You</h4>
                            <p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                        <a href="food-menu.html" class="btn btn-primary rounded d-none d-md-block">View More</a>
                    </div>
                    <div class="card-body pt-2">
                        <div class="testimonial-one owl-carousel owl-loaded owl-drag">




                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-1040px, 0px, 0px); transition: all 0.25s ease 0s; width: 2775px;">
                                    <div class="owl-item cloned" style="width: 316.849px; margin-right: 30px;">
                                        <div class="items">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <img src="images/testimonial/3.jpg" alt="">
                                                    <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html" class="text-black">Ivankov Smurz</a></h5>
                                                    <p class="fs-14">Sixpack Builder</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"></path>
                                                        </svg>
                                                        <span class="fs-14 d-block ms-2 pe-2 me-2 border-end text-black font-w500">4.4</span>
                                                        <a href="javascript:void(0)" class="btn-link fs-14">Send Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 316.849px; margin-right: 30px;">
                                        <div class="items">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <img src="images/testimonial/4.jpg" alt="">
                                                    <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html" class="text-black">Louis Simatupang</a></h5>
                                                    <p class="fs-14">Body Building Trainer</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"></path>
                                                        </svg>
                                                        <span class="fs-14 d-block ms-2 pe-2 me-2 border-end text-black font-w500">4.4</span>
                                                        <a href="app-profile.html" class="btn-link fs-14">Send Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 316.849px; margin-right: 30px;">
                                        <div class="items">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <img src="images/testimonial/1.jpg" alt="">
                                                    <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html" class="text-black">Roberto Carloz</a></h5>
                                                    <p class="fs-14">Body Building Trainer</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"></path>
                                                        </svg>
                                                        <span class="fs-14 d-block ms-2 pe-2 me-2 border-end text-black font-w500">4.4</span>
                                                        <a href="app-profile.html" class="btn-link fs-14">Send Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 316.849px; margin-right: 30px;">
                                        <div class="items">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <img src="images/testimonial/2.jpg" alt="">
                                                    <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html" class="text-black">Cindy Moss</a></h5>
                                                    <p class="fs-14">Fat Belly Trainer</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"></path>
                                                        </svg>
                                                        <span class="fs-14 d-block ms-2 pe-2 me-2 border-end text-black font-w500">4.4</span>
                                                        <a href="app-profile.html" class="btn-link fs-14">Send Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 316.849px; margin-right: 30px;">
                                        <div class="items">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <img src="images/testimonial/3.jpg" alt="">
                                                    <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html" class="text-black">Ivankov Smurz</a></h5>
                                                    <p class="fs-14">Sixpack Builder</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"></path>
                                                        </svg>
                                                        <span class="fs-14 d-block ms-2 pe-2 me-2 border-end text-black font-w500">4.4</span>
                                                        <a href="javascript:void(0)" class="btn-link fs-14">Send Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 316.849px; margin-right: 30px;">
                                        <div class="items">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <img src="images/testimonial/4.jpg" alt="">
                                                    <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html" class="text-black">Louis Simatupang</a></h5>
                                                    <p class="fs-14">Body Building Trainer</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"></path>
                                                        </svg>
                                                        <span class="fs-14 d-block ms-2 pe-2 me-2 border-end text-black font-w500">4.4</span>
                                                        <a href="app-profile.html" class="btn-link fs-14">Send Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 316.849px; margin-right: 30px;">
                                        <div class="items">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <img src="images/testimonial/1.jpg" alt="">
                                                    <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html" class="text-black">Roberto Carloz</a></h5>
                                                    <p class="fs-14">Body Building Trainer</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"></path>
                                                        </svg>
                                                        <span class="fs-14 d-block ms-2 pe-2 me-2 border-end text-black font-w500">4.4</span>
                                                        <a href="app-profile.html" class="btn-link fs-14">Send Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 316.849px; margin-right: 30px;">
                                        <div class="items">
                                            <div class="card text-center">
                                                <div class="card-body">
                                                    <img src="images/testimonial/2.jpg" alt="">
                                                    <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html" class="text-black">Cindy Moss</a></h5>
                                                    <p class="fs-14">Fat Belly Trainer</p>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z" fill="#FFAA29"></path>
                                                        </svg>
                                                        <span class="fs-14 d-block ms-2 pe-2 me-2 border-end text-black font-w500">4.4</span>
                                                        <a href="app-profile.html" class="btn-link fs-14">Send Request</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button></div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-sm-flex d-block pb-0 border-0">
                        <div class="me-auto pe-3">
                            <h4 class="text-black fs-20 font-w600">Calories Chart</h4>
                            <p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                        <div class="dropdown bootstrap-select default-select w-auto"><select class="default-select w-auto" aria-label="Default select example">
                                <option selected="">Weekly</option>
                                <option value="1">Monthly</option>
                                <option value="2">Daily</option>
                                <option value="3">Yearly</option>
                            </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Weekly">
                                <div class="filter-option">
                                    <div class="filter-option-inner">
                                        <div class="filter-option-inner-inner">Weekly</div>
                                    </div>
                                </div>
                            </button>
                            <div class="dropdown-menu ">
                                <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                    <ul class="dropdown-menu inner show" role="presentation"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-3 pb-0">
                        <div id="chartTimeline" style="min-height: 335px;">
                            <div id="apexcharts3lxm6vu" class="apexcharts-canvas apexcharts3lxm6vu apexcharts-theme-light" style="width: 692px; height: 320px;"><svg id="SvgjsSvg1311" width="692" height="320" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(-10, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="692" height="320">
                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 160px;"></div>
                                    </foreignObject>
                                    <g id="SvgjsG1500" class="apexcharts-yaxis" rel="0" transform="translate(21.82686424255371, 0)">
                                        <g id="SvgjsG1501" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1503" font-family="Poppins" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1504">80</tspan>
                                                <title>80</title>
                                            </text><text id="SvgjsText1506" font-family="Poppins" x="20" y="94.3072221364975" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1507">40</tspan>
                                                <title>40</title>
                                            </text><text id="SvgjsText1509" font-family="Poppins" x="20" y="157.214444272995" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1510">0</tspan>
                                                <title>0</title>
                                            </text><text id="SvgjsText1512" font-family="Poppins" x="20" y="220.1216664094925" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1513">-40</tspan>
                                                <title>-40</title>
                                            </text><text id="SvgjsText1515" font-family="Poppins" x="20" y="283.02888854598996" text-anchor="end" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Poppins;">
                                                <tspan id="SvgjsTspan1516">-80</tspan>
                                                <title>-80</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1313" class="apexcharts-inner apexcharts-graphical" transform="translate(51.82686424255371, 30)">
                                        <defs id="SvgjsDefs1312">
                                            <clipPath id="gridRectMask3lxm6vu">
                                                <rect id="SvgjsRect1316" width="634.1731357574463" height="251.62888854598998" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask3lxm6vu"></clipPath>
                                            <clipPath id="nonForecastMask3lxm6vu"></clipPath>
                                            <clipPath id="gridRectMarkerMask3lxm6vu">
                                                <rect id="SvgjsRect1317" width="634.1731357574463" height="255.62888854598998" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG1425" class="apexcharts-grid">
                                            <g id="SvgjsG1426" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1430" x1="0" y1="62.907222136497495" x2="630.1731357574463" y2="62.907222136497495" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1431" x1="0" y1="125.81444427299499" x2="630.1731357574463" y2="125.81444427299499" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1432" x1="0" y1="188.72166640949249" x2="630.1731357574463" y2="188.72166640949249" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1427" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1435" x1="0" y1="251.62888854598998" x2="630.1731357574463" y2="251.62888854598998" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1434" x1="0" y1="1" x2="0" y2="251.62888854598998" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1318" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1319" class="apexcharts-series" seriesName="NewxClients" rel="1" data:realIndex="0">
                                                <rect id="SvgjsRect1322" width="6.301731357574463" height="251.62888854598998" x="12.603462715148925" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1324" d="M 12.603462715148925 125.815444272995 L 12.603462715148925 15.727805534124366 L 18.90519407272339 15.727805534124366 L 18.90519407272339 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 12.603462715148925 125.815444272995 L 12.603462715148925 15.727805534124366 L 18.90519407272339 15.727805534124366 L 18.90519407272339 125.815444272995 z" pathFrom="M 12.603462715148925 125.815444272995 L 12.603462715148925 125.815444272995 L 18.90519407272339 125.815444272995 L 18.90519407272339 125.815444272995 L 18.90519407272339 125.815444272995 L 18.90519407272339 125.815444272995 L 18.90519407272339 125.815444272995 L 12.603462715148925 125.815444272995 z" cy="15.726805534124367" cx="44.11211950302124" j="0" val="70" barHeight="110.08763873887062" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1325" width="6.301731357574463" height="251.62888854598998" x="44.11211950302124" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1327" d="M 44.11211950302124 125.815444272995 L 44.11211950302124 94.36183320474625 L 50.4138508605957 94.36183320474625 L 50.4138508605957 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 44.11211950302124 125.815444272995 L 44.11211950302124 94.36183320474625 L 50.4138508605957 94.36183320474625 L 50.4138508605957 125.815444272995 z" pathFrom="M 44.11211950302124 125.815444272995 L 44.11211950302124 125.815444272995 L 50.4138508605957 125.815444272995 L 50.4138508605957 125.815444272995 L 50.4138508605957 125.815444272995 L 50.4138508605957 125.815444272995 L 50.4138508605957 125.815444272995 L 44.11211950302124 125.815444272995 z" cy="94.36083320474624" cx="75.62077629089356" j="1" val="20" barHeight="31.453611068248748" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1328" width="6.301731357574463" height="251.62888854598998" x="75.62077629089356" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1330" d="M 75.62077629089356 125.815444272995 L 75.62077629089356 7.864402767062184 L 81.92250764846803 7.864402767062184 L 81.92250764846803 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 75.62077629089356 125.815444272995 L 75.62077629089356 7.864402767062184 L 81.92250764846803 7.864402767062184 L 81.92250764846803 125.815444272995 z" pathFrom="M 75.62077629089356 125.815444272995 L 75.62077629089356 125.815444272995 L 81.92250764846803 125.815444272995 L 81.92250764846803 125.815444272995 L 81.92250764846803 125.815444272995 L 81.92250764846803 125.815444272995 L 81.92250764846803 125.815444272995 L 75.62077629089356 125.815444272995 z" cy="7.863402767062183" cx="107.12943307876587" j="2" val="75" barHeight="117.9510415059328" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1331" width="6.301731357574463" height="251.62888854598998" x="107.12943307876587" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1333" d="M 107.12943307876587 125.815444272995 L 107.12943307876587 94.36183320474625 L 113.43116443634034 94.36183320474625 L 113.43116443634034 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 107.12943307876587 125.815444272995 L 107.12943307876587 94.36183320474625 L 113.43116443634034 94.36183320474625 L 113.43116443634034 125.815444272995 z" pathFrom="M 107.12943307876587 125.815444272995 L 107.12943307876587 125.815444272995 L 113.43116443634034 125.815444272995 L 113.43116443634034 125.815444272995 L 113.43116443634034 125.815444272995 L 113.43116443634034 125.815444272995 L 113.43116443634034 125.815444272995 L 107.12943307876587 125.815444272995 z" cy="94.36083320474624" cx="138.63808986663818" j="3" val="20" barHeight="31.453611068248748" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1334" width="6.301731357574463" height="251.62888854598998" x="138.63808986663818" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1336" d="M 138.63808986663818 125.815444272995 L 138.63808986663818 47.18141660237311 L 144.93982122421264 47.18141660237311 L 144.93982122421264 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 138.63808986663818 125.815444272995 L 138.63808986663818 47.18141660237311 L 144.93982122421264 47.18141660237311 L 144.93982122421264 125.815444272995 z" pathFrom="M 138.63808986663818 125.815444272995 L 138.63808986663818 125.815444272995 L 144.93982122421264 125.815444272995 L 144.93982122421264 125.815444272995 L 144.93982122421264 125.815444272995 L 144.93982122421264 125.815444272995 L 144.93982122421264 125.815444272995 L 138.63808986663818 125.815444272995 z" cy="47.180416602373114" cx="170.1467466545105" j="4" val="50" barHeight="78.63402767062188" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1337" width="6.301731357574463" height="251.62888854598998" x="170.1467466545105" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1339" d="M 170.1467466545105 125.815444272995 L 170.1467466545105 62.90822213649749 L 176.44847801208496 62.90822213649749 L 176.44847801208496 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 170.1467466545105 125.815444272995 L 170.1467466545105 62.90822213649749 L 176.44847801208496 62.90822213649749 L 176.44847801208496 125.815444272995 z" pathFrom="M 170.1467466545105 125.815444272995 L 170.1467466545105 125.815444272995 L 176.44847801208496 125.815444272995 L 176.44847801208496 125.815444272995 L 176.44847801208496 125.815444272995 L 176.44847801208496 125.815444272995 L 176.44847801208496 125.815444272995 L 170.1467466545105 125.815444272995 z" cy="62.907222136497495" cx="201.65540344238283" j="5" val="40" barHeight="62.907222136497495" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1340" width="6.301731357574463" height="251.62888854598998" x="201.65540344238283" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1342" d="M 201.65540344238283 125.815444272995 L 201.65540344238283 23.59120830118655 L 207.9571347999573 23.59120830118655 L 207.9571347999573 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 201.65540344238283 125.815444272995 L 201.65540344238283 23.59120830118655 L 207.9571347999573 23.59120830118655 L 207.9571347999573 125.815444272995 z" pathFrom="M 201.65540344238283 125.815444272995 L 201.65540344238283 125.815444272995 L 207.9571347999573 125.815444272995 L 207.9571347999573 125.815444272995 L 207.9571347999573 125.815444272995 L 207.9571347999573 125.815444272995 L 207.9571347999573 125.815444272995 L 201.65540344238283 125.815444272995 z" cy="23.59020830118655" cx="233.16406023025516" j="6" val="65" barHeight="102.22423597180844" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1343" width="6.301731357574463" height="251.62888854598998" x="233.16406023025516" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1345" d="M 233.16406023025516 125.815444272995 L 233.16406023025516 102.22523597180843 L 239.4657915878296 102.22523597180843 L 239.4657915878296 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 233.16406023025516 125.815444272995 L 233.16406023025516 102.22523597180843 L 239.4657915878296 102.22523597180843 L 239.4657915878296 125.815444272995 z" pathFrom="M 233.16406023025516 125.815444272995 L 233.16406023025516 125.815444272995 L 239.4657915878296 125.815444272995 L 239.4657915878296 125.815444272995 L 239.4657915878296 125.815444272995 L 239.4657915878296 125.815444272995 L 239.4657915878296 125.815444272995 L 233.16406023025516 125.815444272995 z" cy="102.22423597180843" cx="264.67271701812746" j="7" val="15" barHeight="23.59020830118656" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1346" width="6.301731357574463" height="251.62888854598998" x="264.67271701812746" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1348" d="M 264.67271701812746 125.815444272995 L 264.67271701812746 62.90822213649749 L 270.9744483757019 62.90822213649749 L 270.9744483757019 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 264.67271701812746 125.815444272995 L 264.67271701812746 62.90822213649749 L 270.9744483757019 62.90822213649749 L 270.9744483757019 125.815444272995 z" pathFrom="M 264.67271701812746 125.815444272995 L 264.67271701812746 125.815444272995 L 270.9744483757019 125.815444272995 L 270.9744483757019 125.815444272995 L 270.9744483757019 125.815444272995 L 270.9744483757019 125.815444272995 L 270.9744483757019 125.815444272995 L 264.67271701812746 125.815444272995 z" cy="62.907222136497495" cx="296.1813738059998" j="8" val="40" barHeight="62.907222136497495" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1349" width="6.301731357574463" height="251.62888854598998" x="296.1813738059998" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1351" d="M 296.1813738059998 125.815444272995 L 296.1813738059998 39.31801383531093 L 302.48310516357424 39.31801383531093 L 302.48310516357424 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 296.1813738059998 125.815444272995 L 296.1813738059998 39.31801383531093 L 302.48310516357424 39.31801383531093 L 302.48310516357424 125.815444272995 z" pathFrom="M 296.1813738059998 125.815444272995 L 296.1813738059998 125.815444272995 L 302.48310516357424 125.815444272995 L 302.48310516357424 125.815444272995 L 302.48310516357424 125.815444272995 L 302.48310516357424 125.815444272995 L 302.48310516357424 125.815444272995 L 296.1813738059998 125.815444272995 z" cy="39.31701383531093" cx="327.6900305938721" j="9" val="55" barHeight="86.49743043768406" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1352" width="6.301731357574463" height="251.62888854598998" x="327.6900305938721" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1354" d="M 327.6900305938721 125.815444272995 L 327.6900305938721 31.45461106824875 L 333.99176195144656 31.45461106824875 L 333.99176195144656 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 327.6900305938721 125.815444272995 L 327.6900305938721 31.45461106824875 L 333.99176195144656 31.45461106824875 L 333.99176195144656 125.815444272995 z" pathFrom="M 327.6900305938721 125.815444272995 L 327.6900305938721 125.815444272995 L 333.99176195144656 125.815444272995 L 333.99176195144656 125.815444272995 L 333.99176195144656 125.815444272995 L 333.99176195144656 125.815444272995 L 333.99176195144656 125.815444272995 L 327.6900305938721 125.815444272995 z" cy="31.453611068248748" cx="359.19868738174443" j="10" val="60" barHeight="94.36083320474624" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1355" width="6.301731357574463" height="251.62888854598998" x="359.19868738174443" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1357" d="M 359.19868738174443 125.815444272995 L 359.19868738174443 94.36183320474625 L 365.5004187393189 94.36183320474625 L 365.5004187393189 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 359.19868738174443 125.815444272995 L 359.19868738174443 94.36183320474625 L 365.5004187393189 94.36183320474625 L 365.5004187393189 125.815444272995 z" pathFrom="M 359.19868738174443 125.815444272995 L 359.19868738174443 125.815444272995 L 365.5004187393189 125.815444272995 L 365.5004187393189 125.815444272995 L 365.5004187393189 125.815444272995 L 365.5004187393189 125.815444272995 L 365.5004187393189 125.815444272995 L 359.19868738174443 125.815444272995 z" cy="94.36083320474624" cx="390.70734416961676" j="11" val="20" barHeight="31.453611068248748" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1358" width="6.301731357574463" height="251.62888854598998" x="390.70734416961676" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1360" d="M 390.70734416961676 125.815444272995 L 390.70734416961676 7.864402767062184 L 397.0090755271912 7.864402767062184 L 397.0090755271912 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 390.70734416961676 125.815444272995 L 390.70734416961676 7.864402767062184 L 397.0090755271912 7.864402767062184 L 397.0090755271912 125.815444272995 z" pathFrom="M 390.70734416961676 125.815444272995 L 390.70734416961676 125.815444272995 L 397.0090755271912 125.815444272995 L 397.0090755271912 125.815444272995 L 397.0090755271912 125.815444272995 L 397.0090755271912 125.815444272995 L 397.0090755271912 125.815444272995 L 390.70734416961676 125.815444272995 z" cy="7.863402767062183" cx="422.2160009574891" j="12" val="75" barHeight="117.9510415059328" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1361" width="6.301731357574463" height="251.62888854598998" x="422.2160009574891" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1363" d="M 422.2160009574891 125.815444272995 L 422.2160009574891 62.90822213649749 L 428.51773231506354 62.90822213649749 L 428.51773231506354 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 422.2160009574891 125.815444272995 L 422.2160009574891 62.90822213649749 L 428.51773231506354 62.90822213649749 L 428.51773231506354 125.815444272995 z" pathFrom="M 422.2160009574891 125.815444272995 L 422.2160009574891 125.815444272995 L 428.51773231506354 125.815444272995 L 428.51773231506354 125.815444272995 L 428.51773231506354 125.815444272995 L 428.51773231506354 125.815444272995 L 428.51773231506354 125.815444272995 L 422.2160009574891 125.815444272995 z" cy="62.907222136497495" cx="453.7246577453614" j="13" val="40" barHeight="62.907222136497495" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1364" width="6.301731357574463" height="251.62888854598998" x="453.7246577453614" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1366" d="M 453.7246577453614 125.815444272995 L 453.7246577453614 86.49843043768405 L 460.02638910293587 86.49843043768405 L 460.02638910293587 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 453.7246577453614 125.815444272995 L 453.7246577453614 86.49843043768405 L 460.02638910293587 86.49843043768405 L 460.02638910293587 125.815444272995 z" pathFrom="M 453.7246577453614 125.815444272995 L 453.7246577453614 125.815444272995 L 460.02638910293587 125.815444272995 L 460.02638910293587 125.815444272995 L 460.02638910293587 125.815444272995 L 460.02638910293587 125.815444272995 L 460.02638910293587 125.815444272995 L 453.7246577453614 125.815444272995 z" cy="86.49743043768405" cx="485.23331453323374" j="14" val="25" barHeight="39.31701383531094" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1367" width="6.301731357574463" height="251.62888854598998" x="485.23331453323374" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1369" d="M 485.23331453323374 125.815444272995 L 485.23331453323374 15.727805534124366 L 491.5350458908082 15.727805534124366 L 491.5350458908082 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 485.23331453323374 125.815444272995 L 485.23331453323374 15.727805534124366 L 491.5350458908082 15.727805534124366 L 491.5350458908082 125.815444272995 z" pathFrom="M 485.23331453323374 125.815444272995 L 485.23331453323374 125.815444272995 L 491.5350458908082 125.815444272995 L 491.5350458908082 125.815444272995 L 491.5350458908082 125.815444272995 L 491.5350458908082 125.815444272995 L 491.5350458908082 125.815444272995 L 485.23331453323374 125.815444272995 z" cy="15.726805534124367" cx="516.741971321106" j="15" val="70" barHeight="110.08763873887062" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1370" width="6.301731357574463" height="251.62888854598998" x="516.741971321106" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1372" d="M 516.741971321106 125.815444272995 L 516.741971321106 94.36183320474625 L 523.0437026786805 94.36183320474625 L 523.0437026786805 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 516.741971321106 125.815444272995 L 516.741971321106 94.36183320474625 L 523.0437026786805 94.36183320474625 L 523.0437026786805 125.815444272995 z" pathFrom="M 516.741971321106 125.815444272995 L 516.741971321106 125.815444272995 L 523.0437026786805 125.815444272995 L 523.0437026786805 125.815444272995 L 523.0437026786805 125.815444272995 L 523.0437026786805 125.815444272995 L 523.0437026786805 125.815444272995 L 516.741971321106 125.815444272995 z" cy="94.36083320474624" cx="548.2506281089783" j="16" val="20" barHeight="31.453611068248748" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1373" width="6.301731357574463" height="251.62888854598998" x="548.2506281089783" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1375" d="M 548.2506281089783 125.815444272995 L 548.2506281089783 62.90822213649749 L 554.5523594665527 62.90822213649749 L 554.5523594665527 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 548.2506281089783 125.815444272995 L 548.2506281089783 62.90822213649749 L 554.5523594665527 62.90822213649749 L 554.5523594665527 125.815444272995 z" pathFrom="M 548.2506281089783 125.815444272995 L 548.2506281089783 125.815444272995 L 554.5523594665527 125.815444272995 L 554.5523594665527 125.815444272995 L 554.5523594665527 125.815444272995 L 554.5523594665527 125.815444272995 L 554.5523594665527 125.815444272995 L 548.2506281089783 125.815444272995 z" cy="62.907222136497495" cx="579.7592848968505" j="17" val="40" barHeight="62.907222136497495" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1376" width="6.301731357574463" height="251.62888854598998" x="579.7592848968505" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1378" d="M 579.7592848968505 125.815444272995 L 579.7592848968505 23.59120830118655 L 586.061016254425 23.59120830118655 L 586.061016254425 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 579.7592848968505 125.815444272995 L 579.7592848968505 23.59120830118655 L 586.061016254425 23.59120830118655 L 586.061016254425 125.815444272995 z" pathFrom="M 579.7592848968505 125.815444272995 L 579.7592848968505 125.815444272995 L 586.061016254425 125.815444272995 L 586.061016254425 125.815444272995 L 586.061016254425 125.815444272995 L 586.061016254425 125.815444272995 L 586.061016254425 125.815444272995 L 579.7592848968505 125.815444272995 z" cy="23.59020830118655" cx="611.2679416847228" j="18" val="65" barHeight="102.22423597180844" barWidth="6.301731357574463"></path>
                                                <rect id="SvgjsRect1379" width="6.301731357574463" height="251.62888854598998" x="611.2679416847228" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="rgba(0,0,0,0)" class="apexcharts-backgroundBar"></rect>
                                                <path id="SvgjsPath1381" d="M 611.2679416847228 125.815444272995 L 611.2679416847228 47.18141660237311 L 617.5696730422973 47.18141660237311 L 617.5696730422973 125.815444272995 z" fill="rgba(11,42,151,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 611.2679416847228 125.815444272995 L 611.2679416847228 47.18141660237311 L 617.5696730422973 47.18141660237311 L 617.5696730422973 125.815444272995 z" pathFrom="M 611.2679416847228 125.815444272995 L 611.2679416847228 125.815444272995 L 617.5696730422973 125.815444272995 L 617.5696730422973 125.815444272995 L 617.5696730422973 125.815444272995 L 617.5696730422973 125.815444272995 L 617.5696730422973 125.815444272995 L 611.2679416847228 125.815444272995 z" cy="47.180416602373114" cx="642.7765984725951" j="19" val="50" barHeight="78.63402767062188" barWidth="6.301731357574463"></path>
                                                <g id="SvgjsG1321" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                                    <g id="SvgjsG1323" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1326" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1329" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1332" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1335" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1338" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1341" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1344" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1347" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1350" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1353" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1356" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1359" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1362" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1365" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1368" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1371" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1374" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1377" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1380" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1382" class="apexcharts-series" seriesName="RetainedxClients" rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1386" d="M 12.603462715148925 125.816444272995 L 12.603462715148925 220.17727747774123 L 18.90519407272339 220.17727747774123 L 18.90519407272339 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 12.603462715148925 125.816444272995 L 12.603462715148925 220.17727747774123 L 18.90519407272339 220.17727747774123 L 18.90519407272339 125.816444272995 z" pathFrom="M 12.603462715148925 125.816444272995 L 12.603462715148925 125.816444272995 L 18.90519407272339 125.816444272995 L 18.90519407272339 125.816444272995 L 18.90519407272339 125.816444272995 L 18.90519407272339 125.816444272995 L 18.90519407272339 125.816444272995 L 12.603462715148925 125.816444272995 z" cy="220.17627747774122" cx="44.11211950302124" j="0" val="-60" barHeight="-94.36083320474624" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1388" d="M 44.11211950302124 125.816444272995 L 44.11211950302124 141.54324980711937 L 50.4138508605957 141.54324980711937 L 50.4138508605957 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 44.11211950302124 125.816444272995 L 44.11211950302124 141.54324980711937 L 50.4138508605957 141.54324980711937 L 50.4138508605957 125.816444272995 z" pathFrom="M 44.11211950302124 125.816444272995 L 44.11211950302124 125.816444272995 L 50.4138508605957 125.816444272995 L 50.4138508605957 125.816444272995 L 50.4138508605957 125.816444272995 L 50.4138508605957 125.816444272995 L 50.4138508605957 125.816444272995 L 44.11211950302124 125.816444272995 z" cy="141.54224980711936" cx="75.62077629089356" j="1" val="-10" barHeight="-15.726805534124374" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1390" d="M 75.62077629089356 125.816444272995 L 75.62077629089356 204.45047194361686 L 81.92250764846803 204.45047194361686 L 81.92250764846803 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 75.62077629089356 125.816444272995 L 75.62077629089356 204.45047194361686 L 81.92250764846803 204.45047194361686 L 81.92250764846803 125.816444272995 z" pathFrom="M 75.62077629089356 125.816444272995 L 75.62077629089356 125.816444272995 L 81.92250764846803 125.816444272995 L 81.92250764846803 125.816444272995 L 81.92250764846803 125.816444272995 L 81.92250764846803 125.816444272995 L 81.92250764846803 125.816444272995 L 75.62077629089356 125.816444272995 z" cy="204.44947194361686" cx="107.12943307876587" j="2" val="-50" barHeight="-78.63402767062188" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1392" d="M 107.12943307876587 125.816444272995 L 107.12943307876587 165.13345810830594 L 113.43116443634034 165.13345810830594 L 113.43116443634034 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 107.12943307876587 125.816444272995 L 107.12943307876587 165.13345810830594 L 113.43116443634034 165.13345810830594 L 113.43116443634034 125.816444272995 z" pathFrom="M 107.12943307876587 125.816444272995 L 107.12943307876587 125.816444272995 L 113.43116443634034 125.816444272995 L 113.43116443634034 125.816444272995 L 113.43116443634034 125.816444272995 L 113.43116443634034 125.816444272995 L 113.43116443634034 125.816444272995 L 107.12943307876587 125.816444272995 z" cy="165.13245810830594" cx="138.63808986663818" j="3" val="-25" barHeight="-39.31701383531094" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1394" d="M 138.63808986663818 125.816444272995 L 138.63808986663818 172.99686087536813 L 144.93982122421264 172.99686087536813 L 144.93982122421264 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 138.63808986663818 125.816444272995 L 138.63808986663818 172.99686087536813 L 144.93982122421264 172.99686087536813 L 144.93982122421264 125.816444272995 z" pathFrom="M 138.63808986663818 125.816444272995 L 138.63808986663818 125.816444272995 L 144.93982122421264 125.816444272995 L 144.93982122421264 125.816444272995 L 144.93982122421264 125.816444272995 L 144.93982122421264 125.816444272995 L 144.93982122421264 125.816444272995 L 138.63808986663818 125.816444272995 z" cy="172.99586087536812" cx="170.1467466545105" j="4" val="-30" barHeight="-47.18041660237312" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1396" d="M 170.1467466545105 125.816444272995 L 170.1467466545105 228.04068024480344 L 176.44847801208496 228.04068024480344 L 176.44847801208496 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 170.1467466545105 125.816444272995 L 170.1467466545105 228.04068024480344 L 176.44847801208496 228.04068024480344 L 176.44847801208496 125.816444272995 z" pathFrom="M 170.1467466545105 125.816444272995 L 170.1467466545105 125.816444272995 L 176.44847801208496 125.816444272995 L 176.44847801208496 125.816444272995 L 176.44847801208496 125.816444272995 L 176.44847801208496 125.816444272995 L 176.44847801208496 125.816444272995 L 170.1467466545105 125.816444272995 z" cy="228.03968024480344" cx="201.65540344238283" j="5" val="-65" barHeight="-102.22423597180844" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1398" d="M 201.65540344238283 125.816444272995 L 201.65540344238283 160.4154164480686 L 207.9571347999573 160.4154164480686 L 207.9571347999573 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 201.65540344238283 125.816444272995 L 201.65540344238283 160.4154164480686 L 207.9571347999573 160.4154164480686 L 207.9571347999573 125.816444272995 z" pathFrom="M 201.65540344238283 125.816444272995 L 201.65540344238283 125.816444272995 L 207.9571347999573 125.816444272995 L 207.9571347999573 125.816444272995 L 207.9571347999573 125.816444272995 L 207.9571347999573 125.816444272995 L 207.9571347999573 125.816444272995 L 201.65540344238283 125.816444272995 z" cy="160.4144164480686" cx="233.16406023025516" j="6" val="-22" barHeight="-34.59897217507363" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1400" d="M 233.16406023025516 125.816444272995 L 233.16406023025516 141.54324980711937 L 239.4657915878296 141.54324980711937 L 239.4657915878296 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 233.16406023025516 125.816444272995 L 233.16406023025516 141.54324980711937 L 239.4657915878296 141.54324980711937 L 239.4657915878296 125.816444272995 z" pathFrom="M 233.16406023025516 125.816444272995 L 233.16406023025516 125.816444272995 L 239.4657915878296 125.816444272995 L 239.4657915878296 125.816444272995 L 239.4657915878296 125.816444272995 L 239.4657915878296 125.816444272995 L 239.4657915878296 125.816444272995 L 233.16406023025516 125.816444272995 z" cy="141.54224980711936" cx="264.67271701812746" j="7" val="-10" barHeight="-15.726805534124374" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1402" d="M 264.67271701812746 125.816444272995 L 264.67271701812746 204.45047194361686 L 270.9744483757019 204.45047194361686 L 270.9744483757019 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 264.67271701812746 125.816444272995 L 264.67271701812746 204.45047194361686 L 270.9744483757019 204.45047194361686 L 270.9744483757019 125.816444272995 z" pathFrom="M 264.67271701812746 125.816444272995 L 264.67271701812746 125.816444272995 L 270.9744483757019 125.816444272995 L 270.9744483757019 125.816444272995 L 270.9744483757019 125.816444272995 L 270.9744483757019 125.816444272995 L 270.9744483757019 125.816444272995 L 264.67271701812746 125.816444272995 z" cy="204.44947194361686" cx="296.1813738059998" j="8" val="-50" barHeight="-78.63402767062188" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1404" d="M 296.1813738059998 125.816444272995 L 296.1813738059998 157.27005534124376 L 302.48310516357424 157.27005534124376 L 302.48310516357424 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 296.1813738059998 125.816444272995 L 296.1813738059998 157.27005534124376 L 302.48310516357424 157.27005534124376 L 302.48310516357424 125.816444272995 z" pathFrom="M 296.1813738059998 125.816444272995 L 296.1813738059998 125.816444272995 L 302.48310516357424 125.816444272995 L 302.48310516357424 125.816444272995 L 302.48310516357424 125.816444272995 L 302.48310516357424 125.816444272995 L 302.48310516357424 125.816444272995 L 296.1813738059998 125.816444272995 z" cy="157.26905534124376" cx="327.6900305938721" j="9" val="-20" barHeight="-31.453611068248748" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1406" d="M 327.6900305938721 125.816444272995 L 327.6900305938721 235.90408301186562 L 333.99176195144656 235.90408301186562 L 333.99176195144656 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 327.6900305938721 125.816444272995 L 327.6900305938721 235.90408301186562 L 333.99176195144656 235.90408301186562 L 333.99176195144656 125.816444272995 z" pathFrom="M 327.6900305938721 125.816444272995 L 327.6900305938721 125.816444272995 L 333.99176195144656 125.816444272995 L 333.99176195144656 125.816444272995 L 333.99176195144656 125.816444272995 L 333.99176195144656 125.816444272995 L 333.99176195144656 125.816444272995 L 327.6900305938721 125.816444272995 z" cy="235.90308301186562" cx="359.19868738174443" j="10" val="-70" barHeight="-110.08763873887062" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1408" d="M 359.19868738174443 125.816444272995 L 359.19868738174443 180.8602636424303 L 365.5004187393189 180.8602636424303 L 365.5004187393189 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 359.19868738174443 125.816444272995 L 359.19868738174443 180.8602636424303 L 365.5004187393189 180.8602636424303 L 365.5004187393189 125.816444272995 z" pathFrom="M 359.19868738174443 125.816444272995 L 359.19868738174443 125.816444272995 L 365.5004187393189 125.816444272995 L 365.5004187393189 125.816444272995 L 365.5004187393189 125.816444272995 L 365.5004187393189 125.816444272995 L 365.5004187393189 125.816444272995 L 359.19868738174443 125.816444272995 z" cy="180.8592636424303" cx="390.70734416961676" j="11" val="-35" barHeight="-55.04381936943531" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1410" d="M 390.70734416961676 125.816444272995 L 390.70734416961676 220.17727747774123 L 397.0090755271912 220.17727747774123 L 397.0090755271912 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 390.70734416961676 125.816444272995 L 390.70734416961676 220.17727747774123 L 397.0090755271912 220.17727747774123 L 397.0090755271912 125.816444272995 z" pathFrom="M 390.70734416961676 125.816444272995 L 390.70734416961676 125.816444272995 L 397.0090755271912 125.816444272995 L 397.0090755271912 125.816444272995 L 397.0090755271912 125.816444272995 L 397.0090755271912 125.816444272995 L 397.0090755271912 125.816444272995 L 390.70734416961676 125.816444272995 z" cy="220.17627747774122" cx="422.2160009574891" j="12" val="-60" barHeight="-94.36083320474624" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1412" d="M 422.2160009574891 125.816444272995 L 422.2160009574891 157.27005534124376 L 428.51773231506354 157.27005534124376 L 428.51773231506354 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 422.2160009574891 125.816444272995 L 422.2160009574891 157.27005534124376 L 428.51773231506354 157.27005534124376 L 428.51773231506354 125.816444272995 z" pathFrom="M 422.2160009574891 125.816444272995 L 422.2160009574891 125.816444272995 L 428.51773231506354 125.816444272995 L 428.51773231506354 125.816444272995 L 428.51773231506354 125.816444272995 L 428.51773231506354 125.816444272995 L 428.51773231506354 125.816444272995 L 422.2160009574891 125.816444272995 z" cy="157.26905534124376" cx="453.7246577453614" j="13" val="-20" barHeight="-31.453611068248748" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1414" d="M 453.7246577453614 125.816444272995 L 453.7246577453614 172.99686087536813 L 460.02638910293587 172.99686087536813 L 460.02638910293587 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 453.7246577453614 125.816444272995 L 453.7246577453614 172.99686087536813 L 460.02638910293587 172.99686087536813 L 460.02638910293587 125.816444272995 z" pathFrom="M 453.7246577453614 125.816444272995 L 453.7246577453614 125.816444272995 L 460.02638910293587 125.816444272995 L 460.02638910293587 125.816444272995 L 460.02638910293587 125.816444272995 L 460.02638910293587 125.816444272995 L 460.02638910293587 125.816444272995 L 453.7246577453614 125.816444272995 z" cy="172.99586087536812" cx="485.23331453323374" j="14" val="-30" barHeight="-47.18041660237312" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1416" d="M 485.23331453323374 125.816444272995 L 485.23331453323374 196.58706917655468 L 491.5350458908082 196.58706917655468 L 491.5350458908082 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 485.23331453323374 125.816444272995 L 485.23331453323374 196.58706917655468 L 491.5350458908082 196.58706917655468 L 491.5350458908082 125.816444272995 z" pathFrom="M 485.23331453323374 125.816444272995 L 485.23331453323374 125.816444272995 L 491.5350458908082 125.816444272995 L 491.5350458908082 125.816444272995 L 491.5350458908082 125.816444272995 L 491.5350458908082 125.816444272995 L 491.5350458908082 125.816444272995 L 485.23331453323374 125.816444272995 z" cy="196.58606917655467" cx="516.741971321106" j="15" val="-45" barHeight="-70.77062490355968" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1418" d="M 516.741971321106 125.816444272995 L 516.741971321106 235.90408301186562 L 523.0437026786805 235.90408301186562 L 523.0437026786805 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 516.741971321106 125.816444272995 L 516.741971321106 235.90408301186562 L 523.0437026786805 235.90408301186562 L 523.0437026786805 125.816444272995 z" pathFrom="M 516.741971321106 125.816444272995 L 516.741971321106 125.816444272995 L 523.0437026786805 125.816444272995 L 523.0437026786805 125.816444272995 L 523.0437026786805 125.816444272995 L 523.0437026786805 125.816444272995 L 523.0437026786805 125.816444272995 L 516.741971321106 125.816444272995 z" cy="235.90308301186562" cx="548.2506281089783" j="16" val="-70" barHeight="-110.08763873887062" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1420" d="M 548.2506281089783 125.816444272995 L 548.2506281089783 204.45047194361686 L 554.5523594665527 204.45047194361686 L 554.5523594665527 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 548.2506281089783 125.816444272995 L 548.2506281089783 204.45047194361686 L 554.5523594665527 204.45047194361686 L 554.5523594665527 125.816444272995 z" pathFrom="M 548.2506281089783 125.816444272995 L 548.2506281089783 125.816444272995 L 554.5523594665527 125.816444272995 L 554.5523594665527 125.816444272995 L 554.5523594665527 125.816444272995 L 554.5523594665527 125.816444272995 L 554.5523594665527 125.816444272995 L 548.2506281089783 125.816444272995 z" cy="204.44947194361686" cx="579.7592848968505" j="17" val="-50" barHeight="-78.63402767062188" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1422" d="M 579.7592848968505 125.816444272995 L 579.7592848968505 196.58706917655468 L 586.061016254425 196.58706917655468 L 586.061016254425 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 579.7592848968505 125.816444272995 L 579.7592848968505 196.58706917655468 L 586.061016254425 196.58706917655468 L 586.061016254425 125.816444272995 z" pathFrom="M 579.7592848968505 125.816444272995 L 579.7592848968505 125.816444272995 L 586.061016254425 125.816444272995 L 586.061016254425 125.816444272995 L 586.061016254425 125.816444272995 L 586.061016254425 125.816444272995 L 586.061016254425 125.816444272995 L 579.7592848968505 125.816444272995 z" cy="196.58606917655467" cx="611.2679416847228" j="18" val="-45" barHeight="-70.77062490355968" barWidth="6.301731357574463"></path>
                                                <path id="SvgjsPath1424" d="M 611.2679416847228 125.816444272995 L 611.2679416847228 141.54324980711937 L 617.5696730422973 141.54324980711937 L 617.5696730422973 125.816444272995 z" fill="rgba(255,148,50,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask3lxm6vu)" pathTo="M 611.2679416847228 125.816444272995 L 611.2679416847228 141.54324980711937 L 617.5696730422973 141.54324980711937 L 617.5696730422973 125.816444272995 z" pathFrom="M 611.2679416847228 125.816444272995 L 611.2679416847228 125.816444272995 L 617.5696730422973 125.816444272995 L 617.5696730422973 125.816444272995 L 617.5696730422973 125.816444272995 L 617.5696730422973 125.816444272995 L 617.5696730422973 125.816444272995 L 611.2679416847228 125.816444272995 z" cy="141.54224980711936" cx="642.7765984725951" j="19" val="-10" barHeight="-15.726805534124374" barWidth="6.301731357574463"></path>
                                                <g id="SvgjsG1384" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                                    <g id="SvgjsG1385" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1387" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1389" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1391" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1393" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1395" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1397" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1399" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1401" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1403" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1405" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1407" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1409" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1411" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1413" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1415" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1417" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1419" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1421" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                    <g id="SvgjsG1423" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask3lxm6vu)"></g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1320" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1383" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <g id="SvgjsG1428" class="apexcharts-grid-borders">
                                            <line id="SvgjsLine1429" x1="0" y1="0" x2="630.1731357574463" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1433" x1="0" y1="251.62888854598998" x2="630.1731357574463" y2="251.62888854598998" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        </g>
                                        <line id="SvgjsLine1436" x1="0" y1="0" x2="630.1731357574463" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1437" x1="0" y1="0" x2="630.1731357574463" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1438" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1439" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1441" font-family="Poppins" x="15.754328393936158" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1442">01</tspan>
                                                    <title>01</title>
                                                </text><text id="SvgjsText1444" font-family="Poppins" x="47.262985181808475" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1445">02</tspan>
                                                    <title>02</title>
                                                </text><text id="SvgjsText1447" font-family="Poppins" x="78.77164196968079" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1448">03</tspan>
                                                    <title>03</title>
                                                </text><text id="SvgjsText1450" font-family="Poppins" x="110.2802987575531" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1451">04</tspan>
                                                    <title>04</title>
                                                </text><text id="SvgjsText1453" font-family="Poppins" x="141.7889555454254" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1454">05</tspan>
                                                    <title>05</title>
                                                </text><text id="SvgjsText1456" font-family="Poppins" x="173.29761233329774" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1457">06</tspan>
                                                    <title>06</title>
                                                </text><text id="SvgjsText1459" font-family="Poppins" x="204.80626912117006" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1460">07</tspan>
                                                    <title>07</title>
                                                </text><text id="SvgjsText1462" font-family="Poppins" x="236.3149259090424" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1463">08</tspan>
                                                    <title>08</title>
                                                </text><text id="SvgjsText1465" font-family="Poppins" x="267.82358269691474" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1466">09</tspan>
                                                    <title>09</title>
                                                </text><text id="SvgjsText1468" font-family="Poppins" x="299.33223948478707" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1469">10</tspan>
                                                    <title>10</title>
                                                </text><text id="SvgjsText1471" font-family="Poppins" x="330.8408962726594" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1472">11</tspan>
                                                    <title>11</title>
                                                </text><text id="SvgjsText1474" font-family="Poppins" x="362.3495530605317" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1475">12</tspan>
                                                    <title>12</title>
                                                </text><text id="SvgjsText1477" font-family="Poppins" x="393.85820984840404" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1478">13</tspan>
                                                    <title>13</title>
                                                </text><text id="SvgjsText1480" font-family="Poppins" x="425.36686663627637" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1481">14</tspan>
                                                    <title>14</title>
                                                </text><text id="SvgjsText1483" font-family="Poppins" x="456.8755234241487" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1484">15</tspan>
                                                    <title>15</title>
                                                </text><text id="SvgjsText1486" font-family="Poppins" x="488.384180212021" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1487">16</tspan>
                                                    <title>16</title>
                                                </text><text id="SvgjsText1489" font-family="Poppins" x="519.8928369998933" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1490">17</tspan>
                                                    <title>17</title>
                                                </text><text id="SvgjsText1492" font-family="Poppins" x="551.4014937877656" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1493">18</tspan>
                                                    <title>18</title>
                                                </text><text id="SvgjsText1495" font-family="Poppins" x="582.9101505756379" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1496">19</tspan>
                                                    <title>19</title>
                                                </text><text id="SvgjsText1498" font-family="Poppins" x="614.4188073635102" y="280.62888854599" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#787878" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Poppins;">
                                                    <tspan id="SvgjsTspan1499">20</tspan>
                                                    <title>20</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1517" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1518" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1519" class="apexcharts-point-annotations"></g>
                                    </g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(11, 42, 151);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 148, 50);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-xxl-4">
        <div class="row">
            <div class="col-xl-12">
                <div class="card featuredMenu">
                    <div class="card-header border-0">
                        <h4 class="text-black font-w600 fs-20 mb-0">Featured Diet Menu</h4>
                    </div>
                    <div class="card-body loadmore-content height700 dz-scroll pt-0" id="FeaturedMenusContent">
                        <div class="media mb-4">
                            <img src="images/menus/1.png" width="85" alt="" class="rounded me-3">
                            <div class="media-body">
                                <h5><a href="food-menu.html" class="text-black fs-16">Chinese Orange Fruit With Avocado Salad</a></h5>
                                <span class="fs-14 text-primary font-w500">Kevin Ignis</span>
                            </div>
                        </div>
                        <ul class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
                            <li class="me-3 mb-2"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black">4-6 mins </span></li>
                            <li class="mb-2"><i class="fa-regular fa-star me-2 scale1 text-warning" aria-hidden="true"></i><span class="fs-14 text-black font-w500">176 Reviews</span></li>
                        </ul>
                        <div class="media mb-4">
                            <img src="images/menus/2.png" width="85" alt="" class="rounded me-3">
                            <div class="media-body">
                                <h5><a href="food-menu.html" class="text-black fs-16">Fresh or Frozen (No Sugar Added) Fruits</a></h5>
                                <span class="fs-14 text-primary font-w500">Olivia Johanson</span>
                            </div>
                        </div>
                        <ul class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
                            <li class="me-3 mb-2"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black">4-6 mins </span></li>
                            <li class="mb-2"><i class="fa-regular fa-star me-2 scale1 text-warning" aria-hidden="true"></i><span class="fs-14 text-black font-w500">176 Reviews</span></li>
                        </ul>
                        <div class="media mb-4">
                            <img src="images/menus/3.png" width="85" alt="" class="rounded me-3">
                            <div class="media-body">
                                <h5><a href="food-menu.html" class="text-black fs-16">Fresh or Frozen (No Sugar Added) Fruits</a></h5>
                                <span class="fs-14 text-primary font-w500">Stefanny Raharjo</span>
                            </div>
                        </div>
                        <ul class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
                            <li class="me-3 mb-2"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black">4-6 mins </span></li>
                            <li class="mb-2"><i class="fa-regular fa-star me-2 scale1 text-warning" aria-hidden="true"></i><span class="fs-14 text-black font-w500">176 Reviews</span></li>
                        </ul>
                        <div class="media mb-4">
                            <img src="images/menus/4.png" width="85" alt="" class="rounded me-3">
                            <div class="media-body">
                                <h5><a href="food-menu.html" class="text-black fs-16">Original Boiled Egg with Himalaya Salt</a></h5>
                                <span class="fs-14 text-primary font-w500">Peter Parkur</span>
                            </div>
                        </div>
                        <ul class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
                            <li class="me-3 mb-2"><i class="las la-clock scale5 me-2"></i><span class="fs-14 text-black">4-6 mins </span></li>
                            <li class="mb-2"><i class="fa-regular fa-star me-2 scale1 text-warning" aria-hidden="true"></i><span class="fs-14 text-black font-w500">176 Reviews</span></li>
                        </ul>
                    </div>
                    <div class="card-footer style-1 text-center border-0 pt-0 pb-4">
                        <a class="text-primary dz-load-more fa fa-chevron-down" aria-label="Featured-icon" id="FeaturedMenus" href="javascript:void(0);" rel="ajax/featured-menu-list.html">
                        </a>
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