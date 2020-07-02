(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["layouts-admin-layout-admin-layout-module"],{

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/jobApplication/update-job-application/update-job-application.component.html":
/*!**********************************************************************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/components/jobApplication/update-job-application/update-job-application.component.html ***!
  \**********************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div class=\"main-content\">\r\n    <div class=\"container-fluid\">\r\n        <div class=\"row\">\r\n            <div class=\"col-md-8\">\r\n                <div class=\"card\">\r\n                    <div class=\"card-header card-header-danger\">\r\n                        <h4 class=\"card-title\">Edit Application</h4>\r\n                    </div>\r\n                    <!-- {{status.length}} -->\r\n                        <!-- <div *ngFor=\"let sta of status\">\r\n                          {{ sta }}\r\n                        </div> -->\r\n                    <div class=\"card-body\">\r\n                    <form [formGroup]=\"updateJobApplicationForm\" (submit)=\"updateForm()\">\r\n                    \r\n                    <!-- <form [([formGroup])]=\"updateJobApplicationForm\" (submit)=\"updateForm(updateJobApplicationForm.value)\"> -->\r\n                        <!-- <select formControlName=\"dropdownStatus\" >\r\n                            <option value=\"\" selected disabled>--Select Status--</option>\r\n                            <option class=\"dropdown-item\" *ngFor=\"let state of status\">{{state}}</option>\r\n                        </select> -->\r\n                        \r\n                        <div class=\"row\">\r\n                            <div class=\"col-md-12\">\r\n                                Job Post : <input type=\"text\" value={{appdata?.jobPost_id.title}} disabled>\r\n                                <br><br>\r\n                                <div>Candidate : <input type=\"text\" value={{username}} disabled>\r\n                                </div><br>\r\n                                <div>Application Date : <input type=\"text\" value={{appdata?.application_date}} disabled>\r\n                                </div><br>\r\n                                <div>Application Status : \r\n                                    <!-- {{appdata?.application_status}} -->\r\n                            <input formControlName=\"updated_status\" id=\"newStatus\"  placeholder=\"{{appdata?.application_status}}\" type=\"text\">\r\n                                <br>\r\n                                <!-- {{status}} -->\r\n                              \r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                            <button mat-raised-button type=\"submit\" class=\"btn btn-danger pull-right\">Update Application</button>\r\n                            <div class=\"clearfix\"></div>\r\n                    </form>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>");

/***/ }),

/***/ "./src/app/components/jobApplication/update-job-application/update-job-application.component.css":
/*!*******************************************************************************************************!*\
  !*** ./src/app/components/jobApplication/update-job-application/update-job-application.component.css ***!
  \*******************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2NvbXBvbmVudHMvam9iQXBwbGljYXRpb24vdXBkYXRlLWpvYi1hcHBsaWNhdGlvbi91cGRhdGUtam9iLWFwcGxpY2F0aW9uLmNvbXBvbmVudC5jc3MifQ== */");

/***/ }),

/***/ "./src/app/components/jobApplication/update-job-application/update-job-application.component.ts":
/*!******************************************************************************************************!*\
  !*** ./src/app/components/jobApplication/update-job-application/update-job-application.component.ts ***!
  \******************************************************************************************************/
/*! exports provided: UpdateJobApplicationComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "UpdateJobApplicationComponent", function() { return UpdateJobApplicationComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/__ivy_ngcc__/fesm5/core.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/__ivy_ngcc__/fesm5/forms.js");
/* harmony import */ var app_data_jobApplication_jobApplication_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! app/data/jobApplication/jobApplication.service */ "./src/app/data/jobApplication/jobApplication.service.ts");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/__ivy_ngcc__/fesm5/router.js");
/* harmony import */ var app_providers_storage_storage_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! app/providers/storage/storage.service */ "./src/app/providers/storage/storage.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var __importDefault = (undefined && undefined.__importDefault) || function (mod) {
  return (mod && mod.__esModule) ? mod : { "default": mod };
};





var UpdateJobApplicationComponent = /** @class */ (function () {
    function UpdateJobApplicationComponent(fb, jobApplicationService, router, route, storageServive) {
        var _this = this;
        this.fb = fb;
        this.jobApplicationService = jobApplicationService;
        this.router = router;
        this.route = route;
        this.storageServive = storageServive;
        this.status = ["waiting", "confirm", "rejected"];
        this.jobApplicationSubscriber = this.jobApplicationService.jobApplicationSubscriber().subscribe(function (data) {
            _this.jobApplicationSubscriber = data ? data.data : undefined;
            _this.username = _this.storageServive.get('userInfo').user.first_name.charAt(0).toUpperCase() + _this.storageServive.get('userInfo').user.first_name.slice(1) + " " + _this.storageServive.get('userInfo').user.last_name;
            console.log(_this.userInfo);
        });
    }
    UpdateJobApplicationComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.updateJobApplicationForm = this.fb.group({
            updated_status: [''],
        });
        var id = this.route.snapshot.paramMap.get('id');
        this.jobApplicationService.getApplication(id).subscribe(function (data) {
            _this.appdata = data ? data.data : undefined;
        });
    };
    UpdateJobApplicationComponent.prototype.updateForm = function () {
        var _this = this;
        //when the form is submitted
        //this method will be invoked
        //update will change only status
        // let check = document.getElementById("newStatus").value;
        // let check = document.getElementById("newStatus").value;
        var check = this.updateJobApplicationForm.value.updated_status;
        console.log("JS Check" + check);
        console.log(this.updateJobApplicationForm.value);
        this.updateJobApplicationForm.value._id = this.route.snapshot.paramMap.get('id');
        this.updateJobApplicationForm.value.application_status = check;
        console.log(this.updateJobApplicationForm.value);
        // alert(this.updateJobApplicationForm.value.application_status);
        this.jobApplicationService.updateJobApplication(this.updateJobApplicationForm.value).subscribe(function (jobApplication) {
            _this.router.navigate(['/' + _this.userInfo.user.role.toLowerCase() + '/my-applications']);
        });
        this.router.navigate(['/' + this.userInfo.user.role.toLowerCase() + '/my-applications']);
    };
    UpdateJobApplicationComponent.prototype.ngOnDestroy = function () {
        // this.jobSubscriber.unsubscribe();
    };
    UpdateJobApplicationComponent.ctorParameters = function () { return [
        { type: _angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormBuilder"] },
        { type: app_data_jobApplication_jobApplication_service__WEBPACK_IMPORTED_MODULE_2__["JobApplicationService"] },
        { type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"] },
        { type: _angular_router__WEBPACK_IMPORTED_MODULE_3__["ActivatedRoute"] },
        { type: app_providers_storage_storage_service__WEBPACK_IMPORTED_MODULE_4__["StorageService"] }
    ]; };
    UpdateJobApplicationComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-update-job-application',
            template: __importDefault(__webpack_require__(/*! raw-loader!./update-job-application.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/components/jobApplication/update-job-application/update-job-application.component.html")).default,
            styles: [__importDefault(__webpack_require__(/*! ./update-job-application.component.css */ "./src/app/components/jobApplication/update-job-application/update-job-application.component.css")).default]
        }),
        __metadata("design:paramtypes", [_angular_forms__WEBPACK_IMPORTED_MODULE_1__["FormBuilder"], app_data_jobApplication_jobApplication_service__WEBPACK_IMPORTED_MODULE_2__["JobApplicationService"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_3__["ActivatedRoute"], app_providers_storage_storage_service__WEBPACK_IMPORTED_MODULE_4__["StorageService"]])
    ], UpdateJobApplicationComponent);
    return UpdateJobApplicationComponent;
}());



/***/ }),

/***/ "./src/app/layouts/admin-layout/admin-layout.module.ts":
/*!*************************************************************!*\
  !*** ./src/app/layouts/admin-layout/admin-layout.module.ts ***!
  \*************************************************************/
/*! exports provided: AdminLayoutModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AdminLayoutModule", function() { return AdminLayoutModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/__ivy_ngcc__/fesm5/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/__ivy_ngcc__/fesm5/router.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/__ivy_ngcc__/fesm5/common.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/__ivy_ngcc__/fesm5/forms.js");
/* harmony import */ var _admin_layout_routing__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./admin-layout.routing */ "./src/app/layouts/admin-layout/admin-layout.routing.ts");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/__ivy_ngcc__/fesm5/http.js");
/* harmony import */ var _providers_list__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./providers-list */ "./src/app/layouts/admin-layout/providers-list.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};







var AdminLayoutModule = /** @class */ (function () {
    function AdminLayoutModule() {
    }
    AdminLayoutModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
                _angular_router__WEBPACK_IMPORTED_MODULE_1__["RouterModule"].forChild(_admin_layout_routing__WEBPACK_IMPORTED_MODULE_4__["AdminLayoutRoutes"]),
                _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_3__["ReactiveFormsModule"],
                _angular_common_http__WEBPACK_IMPORTED_MODULE_5__["HttpClientModule"]
            ],
            declarations: [],
            providers: _providers_list__WEBPACK_IMPORTED_MODULE_6__["ProvidersList"]
        })
    ], AdminLayoutModule);
    return AdminLayoutModule;
}());



/***/ }),

/***/ "./src/app/layouts/admin-layout/admin-layout.routing.ts":
/*!**************************************************************!*\
  !*** ./src/app/layouts/admin-layout/admin-layout.routing.ts ***!
  \**************************************************************/
/*! exports provided: AdminLayoutRoutes */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AdminLayoutRoutes", function() { return AdminLayoutRoutes; });
/* harmony import */ var _components_user_profile_user_profile_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../components/user-profile/user-profile.component */ "./src/app/components/user-profile/user-profile.component.ts");
/* harmony import */ var _components_table_list_table_list_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../components/table-list/table-list.component */ "./src/app/components/table-list/table-list.component.ts");
/* harmony import */ var _components_typography_typography_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../components/typography/typography.component */ "./src/app/components/typography/typography.component.ts");
/* harmony import */ var _components_icons_icons_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../components/icons/icons.component */ "./src/app/components/icons/icons.component.ts");
/* harmony import */ var _components_maps_maps_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../components/maps/maps.component */ "./src/app/components/maps/maps.component.ts");
/* harmony import */ var _components_notifications_notifications_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../components/notifications/notifications.component */ "./src/app/components/notifications/notifications.component.ts");
/* harmony import */ var _components_upgrade_upgrade_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../components/upgrade/upgrade.component */ "./src/app/components/upgrade/upgrade.component.ts");
/* harmony import */ var _components_assessment_assessment_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../components/assessment/assessment.component */ "./src/app/components/assessment/assessment.component.ts");
/* harmony import */ var app_components_users_users_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! app/components/users/users.component */ "./src/app/components/users/users.component.ts");
/* harmony import */ var app_components_jobApplication_jobApplication_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! app/components/jobApplication/jobApplication.component */ "./src/app/components/jobApplication/jobApplication.component.ts");
/* harmony import */ var app_components_jobApplication_add_job_application_add_job_application_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! app/components/jobApplication/add-job-application/add-job-application.component */ "./src/app/components/jobApplication/add-job-application/add-job-application.component.ts");
/* harmony import */ var app_components_jobApplication_update_job_application_update_job_application_component__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! app/components/jobApplication/update-job-application/update-job-application.component */ "./src/app/components/jobApplication/update-job-application/update-job-application.component.ts");
/* harmony import */ var app_components_jobApplication_my_applications_my_applications_component__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! app/components/jobApplication/my-applications/my-applications.component */ "./src/app/components/jobApplication/my-applications/my-applications.component.ts");
/* harmony import */ var app_components_jobApplication_all_applications_all_applications_component__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! app/components/jobApplication/all-applications/all-applications.component */ "./src/app/components/jobApplication/all-applications/all-applications.component.ts");
/* harmony import */ var app_components_employer_employer_component__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! app/components/employer/employer.component */ "./src/app/components/employer/employer.component.ts");
/* harmony import */ var app_components_job_post_job_post_component__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! app/components/job-post/job-post.component */ "./src/app/components/job-post/job-post.component.ts");
/* harmony import */ var app_components_job_post_add_job_post_add_job_post_component__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! app/components/job-post/add-job-post/add-job-post.component */ "./src/app/components/job-post/add-job-post/add-job-post.component.ts");
/* harmony import */ var app_components_job_post_view_job_post_view_job_post_component__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! app/components/job-post/view-job-post/view-job-post.component */ "./src/app/components/job-post/view-job-post/view-job-post.component.ts");
/* harmony import */ var app_components_assessment_addassessment_addassessment_component__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! app/components/assessment/addassessment/addassessment.component */ "./src/app/components/assessment/addassessment/addassessment.component.ts");
/* harmony import */ var app_components_assessment_viewassessment_viewassessment_component__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! app/components/assessment/viewassessment/viewassessment.component */ "./src/app/components/assessment/viewassessment/viewassessment.component.ts");
/* harmony import */ var app_components_assessment_updateassessment_updateassessment_component__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! app/components/assessment/updateassessment/updateassessment.component */ "./src/app/components/assessment/updateassessment/updateassessment.component.ts");
/* harmony import */ var app_components_employer_employer_profile_employer_profile_component__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! app/components/employer/employer-profile/employer-profile.component */ "./src/app/components/employer/employer-profile/employer-profile.component.ts");
/* harmony import */ var app_components_job_post_update_job_post_update_job_post_component__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! app/components/job-post/update-job-post/update-job-post.component */ "./src/app/components/job-post/update-job-post/update-job-post.component.ts");
/* harmony import */ var app_components_candidate_candidate_profile_candidate_profile_component__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! app/components/candidate/candidate-profile/candidate-profile.component */ "./src/app/components/candidate/candidate-profile/candidate-profile.component.ts");
/* harmony import */ var app_components_candidate_candidate_component__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! app/components/candidate/candidate.component */ "./src/app/components/candidate/candidate.component.ts");
/* harmony import */ var app_components_assessment_reviewassessment_reviewassessment_component__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! app/components/assessment/reviewassessment/reviewassessment.component */ "./src/app/components/assessment/reviewassessment/reviewassessment.component.ts");





9;





















var AdminLayoutRoutes = [
    // {
    //   path: '',
    //   children: [ {
    //     path: 'dashboard',
    //     component: DashboardComponent
    // }]}, {
    // path: '',
    // children: [ {
    //   path: 'userprofile',
    //   component: UserProfileComponent
    // }]
    // }, {
    //   path: '',
    //   children: [ {
    //     path: 'icons',
    //     component: IconsComponent
    //     }]
    // }, {
    //     path: '',
    //     children: [ {
    //         path: 'notifications',
    //         component: NotificationsComponent
    //     }]
    // }, {
    //     path: '',
    //     children: [ {
    //         path: 'maps',
    //         component: MapsComponent
    //     }]
    // }, {
    //     path: '',
    //     children: [ {
    //         path: 'typography',
    //         component: TypographyComponent
    //     }]
    // }, {
    //     path: '',
    //     children: [ {
    //         path: 'upgrade',
    //         component: UpgradeComponent
    //     }]
    // }
    {
        path: '',
        redirectTo: 'users',
        pathMatch: 'full',
    },
    // { path: 'dashboard',    component: DashboardComponent },
    { path: 'assessment', component: _components_assessment_assessment_component__WEBPACK_IMPORTED_MODULE_7__["AssessmentComponent"] },
    { path: 'jobApplication', component: app_components_jobApplication_jobApplication_component__WEBPACK_IMPORTED_MODULE_9__["JobApplicationComponent"] },
    { path: 'addjobApplication/:id', component: app_components_jobApplication_add_job_application_add_job_application_component__WEBPACK_IMPORTED_MODULE_10__["AddJobApplicationComponent"] },
    { path: 'updateJobApplication/:id', component: app_components_jobApplication_update_job_application_update_job_application_component__WEBPACK_IMPORTED_MODULE_11__["UpdateJobApplicationComponent"] },
    { path: 'my-applications', component: app_components_jobApplication_my_applications_my_applications_component__WEBPACK_IMPORTED_MODULE_12__["MyApplicationsComponent"] },
    { path: 'allApplications', component: app_components_jobApplication_all_applications_all_applications_component__WEBPACK_IMPORTED_MODULE_13__["AllApplicationsComponent"] },
    { path: 'addassessment', component: app_components_assessment_addassessment_addassessment_component__WEBPACK_IMPORTED_MODULE_18__["AddassessmentComponent"], pathMatch: 'full' },
    { path: 'updateassessment', component: app_components_assessment_updateassessment_updateassessment_component__WEBPACK_IMPORTED_MODULE_20__["UpdateassessmentComponent"] },
    { path: 'reviewassessment/:id', component: app_components_assessment_reviewassessment_reviewassessment_component__WEBPACK_IMPORTED_MODULE_25__["ReviewassessmentComponent"] },
    { path: 'viewassessment/:id', component: app_components_assessment_viewassessment_viewassessment_component__WEBPACK_IMPORTED_MODULE_19__["ViewassessmentComponent"] },
    { path: 'updateassessment/:id', component: app_components_assessment_updateassessment_updateassessment_component__WEBPACK_IMPORTED_MODULE_20__["UpdateassessmentComponent"] },
    { path: 'employer-profile/:id', component: app_components_employer_employer_profile_employer_profile_component__WEBPACK_IMPORTED_MODULE_21__["EmployerProfileComponent"] },
    { path: 'candidate-profile/:id', component: app_components_candidate_candidate_profile_candidate_profile_component__WEBPACK_IMPORTED_MODULE_23__["CandidateProfileComponent"] },
    { path: 'users', component: app_components_users_users_component__WEBPACK_IMPORTED_MODULE_8__["UsersComponent"] },
    { path: 'employers', component: app_components_employer_employer_component__WEBPACK_IMPORTED_MODULE_14__["EmployerComponent"] },
    { path: 'candidates', component: app_components_candidate_candidate_component__WEBPACK_IMPORTED_MODULE_24__["CandidateComponent"] },
    { path: 'job-posts', component: app_components_job_post_job_post_component__WEBPACK_IMPORTED_MODULE_15__["JobPostComponent"] },
    { path: 'add-job-post', component: app_components_job_post_add_job_post_add_job_post_component__WEBPACK_IMPORTED_MODULE_16__["AddJobPostComponent"] },
    { path: 'view-job-post/:id', component: app_components_job_post_view_job_post_view_job_post_component__WEBPACK_IMPORTED_MODULE_17__["ViewJobPostComponent"] },
    { path: 'user-profile', component: _components_user_profile_user_profile_component__WEBPACK_IMPORTED_MODULE_0__["UserProfileComponent"] },
    { path: 'table-list', component: _components_table_list_table_list_component__WEBPACK_IMPORTED_MODULE_1__["TableListComponent"] },
    { path: 'typography', component: _components_typography_typography_component__WEBPACK_IMPORTED_MODULE_2__["TypographyComponent"] },
    { path: 'icons', component: _components_icons_icons_component__WEBPACK_IMPORTED_MODULE_3__["IconsComponent"] },
    { path: 'maps', component: _components_maps_maps_component__WEBPACK_IMPORTED_MODULE_4__["MapsComponent"] },
    { path: 'notifications', component: _components_notifications_notifications_component__WEBPACK_IMPORTED_MODULE_5__["NotificationsComponent"] },
    { path: 'upgrade', component: _components_upgrade_upgrade_component__WEBPACK_IMPORTED_MODULE_6__["UpgradeComponent"] },
    { path: 'update-job-post/:id', component: app_components_job_post_update_job_post_update_job_post_component__WEBPACK_IMPORTED_MODULE_22__["UpdateJobPostComponent"] }
];


/***/ })

}]);
//# sourceMappingURL=layouts-admin-layout-admin-layout-module.js.map