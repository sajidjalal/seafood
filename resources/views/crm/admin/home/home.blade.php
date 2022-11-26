@extends('layouts.crm.app')

@section('content')
    <div class="row g-0">
        <div class="col-lg-12 col-xl-12 pe-lg-12 mb-3">
            <div class="card h-lg-100 overflow-hidden">
                <div class="card-body p-0">
                    <div class="table-responsive scrollbar">
                        <table class="table table-dashboard mb-0 table-borderless fs--1 border-200">
                            <thead class="bg-light">
                                <tr class="text-900">
                                    <th>Best Selling Products</th>
                                    <th class="text-end">Revenue ($3333)</th>
                                    <th class="pe-card text-end" style="width: 8rem">Revenue (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom border-200">
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <img class="rounded-1 border border-200" src="{{ asset('theme/12.png') }}"
                                                width="60" alt="" />
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link"
                                                        href="#!">Raven Pro</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Landing</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-end fw-semi-bold">$1311</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar rounded-pill" role="progressbar"
                                                    style="width: 39%;" aria-valuenow="39" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">39%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom border-200">
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <img class="rounded-1 border border-200" src="{{ asset('theme/10.png') }}"
                                                width="60" alt="" />
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link"
                                                        href="#!">Boots4</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Portfolio</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-end fw-semi-bold">$860</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar rounded-pill" role="progressbar"
                                                    style="width: 26%;" aria-valuenow="26" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">26%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom border-200">
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <img class="rounded-1 border border-200" src="{{ asset('theme/11.png') }}"
                                                width="60" alt="" />
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link"
                                                        href="#!">Falcon</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Admin</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-end fw-semi-bold">$539</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar rounded-pill" role="progressbar"
                                                    style="width: 16%;" aria-valuenow="16" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">16%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-bottom border-200">
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <img class="rounded-1 border border-200" src="{{ asset('theme/14.png') }}"
                                                width="60" alt="" />
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link"
                                                        href="#!">Slick</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Builder</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-end fw-semi-bold">$343</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar rounded-pill" role="progressbar"
                                                    style="width: 10%;" aria-valuenow="10" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">10%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <img class="rounded-1 border border-200" src="{{ asset('theme/13.png') }}"
                                                width="60" alt="" />
                                            <div class="flex-1 ms-3">
                                                <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link"
                                                        href="#!">Reign Pro</a></h6>
                                                <p class="fw-semi-bold mb-0 text-500">Agency</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-end fw-semi-bold">$280</td>
                                    <td class="align-middle pe-card">
                                        <div class="d-flex align-items-center">
                                            <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                                <div class="progress-bar rounded-pill" role="progressbar"
                                                    style="width: 8%;" aria-valuenow="8" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="fw-semi-bold ms-2">8%</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-light py-2">
                    <div class="row flex-between-center">
                        <div class="col-auto"><select class="form-select form-select-sm">
                                <option>Last 7 days</option>
                                <option>Last Month</option>
                                <option>Last Year</option>
                            </select></div>
                        <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
