<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside" style="background-color: green;">
    <!-- begin:: Aside -->
    <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
        <div>

            <h4>Système Management</h4>
        </div>

        <!-- <div class="kt-aside__brand-tools">
            <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
        </div> -->
    </div>
    <!-- end:: Aside --> <!-- begin:: Aside Menu -->
    <div>
        <div id="kt_aside_menu"
            class="kt-aside-menu "
            data-ktmenu-vertical="1"
            data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">

            <ul class="kt-menu__nav ">
                <li class="kt-menu__section kt-menu__section--first">
                    <h4 class="kt-menu__section-text">Patients & Médecins</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Services</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Médecins</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('departments.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Ajouter un Service</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('departments.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Liste des Services</span></a></li>
                        </ul>
                    </div>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Médecins</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Médecins</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('doctors.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Ajouter un Médecin</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('doctors.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Liste des Médecin</span></a></li>
                        </ul>
                    </div>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Patients</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Patients</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('patients.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Ajouter un Patient</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('patients.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Liste des Patients</span></a></li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Documents</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('documents.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Ajouter un Document</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('documents.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Liste des Documents</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Historiques</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('casehistories.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Ajouter un Historique</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('casehistories.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Liste des Historiques</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Resources Humaines</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Infirmier(e)s</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('nurses.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Ajouter un Infirmier(e)</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('nurses.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Liste des Infirmier(e)s</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Pharmaciens</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('pharmacists.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Ajouter Pharmacien</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('pharmacists.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Liste des Pharmacien</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Laboratorists</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('nurses.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Laboratorist</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('laboratorists.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Laboratorists List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Receptionistes</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('receptionists.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Ajouter un Receptioniste</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('receptionists.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Listes des Receptionistes</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Accountants</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('accountants.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Accountant</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('accountants.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Accountants List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </li>

                <!-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Les Rendez-vous</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Horaires RDV</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('timeschedules.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Time Schedule</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('timeschedules.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Time Schedules List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Day Off Schedules</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('dayoffschedules.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Day Off Schedule</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('dayoffschedules.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Day Off Schedules List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Les Rendez-vous</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Rendez-vous</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('appointments.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Ajouter un RDV</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('appointments.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Liste des RDV</span></a></li>
                        </ul>
                    </div>
                </li>

                <!-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Lap</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">

                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('lapreports.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Add Lap Test</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('lapreports.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Lap Tests List</span></a></li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Lap Templates</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('laptemplates.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Template</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('laptemplates.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Templates List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li> -->

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Prescriptions</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Prescriptions</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('prescriptions.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Ajouter un Prescription</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('prescriptions.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Liste des Prescriptions</span></a></li>

                        </ul>
                    </div>
                </li>

                <!-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Pharmacy</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('medicines.create')}}"
                                    class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Add Medicine</span><span
                                        class="kt-menu__link-badge"><span
                                            class="kt-badge kt-badge--warning">10</span></span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('medicines.index')}}"
                                    class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Medicines List</span><span
                                        class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Medicine Categories</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('medicines.categories.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Medicine Category</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('medicines.categories.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Medicine Categories List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li> -->

                <!-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Services</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Services</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('services.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Add Service</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('services.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Services List</span></a></li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Service Packages</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('servicepackages.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Service Package</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('servicepackages.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Service Packages List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li> -->

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Lits</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                    class="kt-menu__link"><span class="kt-menu__link-text">Lits</span></span></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('bedallotments.create')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Attribuer Lit</span></a></li>
                            <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('bedallotments.index')}}" class="kt-menu__link "><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Liste Lits Attribués</span></a></li>
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Lits</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('beds.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Ajouter un lit</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('beds.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Listes des Lits</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                    data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i
                            class="kt-menu__link-icon flaticon-layers"></i><span
                            class="kt-menu__link-text">Finances</span><i
                            class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                        <ul class="kt-menu__subnav">
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Paiments</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('payments.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Ajouter un Paiment</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('payments.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Liste des Paiement</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Payment Items</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('paymentitems.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Item</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('paymentitems.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Items List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                            <!-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                        class="kt-menu__link-text">Expenses</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('expenses.create')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add Expense</span><span
                                                    class="kt-menu__link-badge"><span
                                                        class="kt-badge kt-badge--warning">10</span></span></a></li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="{{route('expenses.index')}}"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Expenses List</span><span
                                                    class="kt-menu__link-badge"><span class="kt-badge kt-badge--danger">6</span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->


                        </ul>
                    </div>
                </li>

                <li class="kt-menu__item " aria-haspopup="true"><a href="#" class="kt-menu__link "><i
                            class="kt-menu__link-icon flaticon-suitcase"></i><span
                            class="kt-menu__link-text">Parametrage du site</span></a></li>
            </ul>
        </div>
    </div>
    <!-- end:: Aside Menu -->
</div>
<!-- end:: Aside -->