(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["layouts-candidate-layout-candidate-layout-module"],{

/***/ "./src/app/layouts/candidate-layout/candidate-layout.module.ts":
/*!*********************************************************************!*\
  !*** ./src/app/layouts/candidate-layout/candidate-layout.module.ts ***!
  \*********************************************************************/
/*! exports provided: CandidateLayoutModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CandidateLayoutModule", function() { return CandidateLayoutModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/__ivy_ngcc__/fesm5/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/__ivy_ngcc__/fesm5/router.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/__ivy_ngcc__/fesm5/common.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/__ivy_ngcc__/fesm5/forms.js");
/* harmony import */ var _candidate_layout_routing__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./candidate-layout.routing */ "./src/app/layouts/candidate-layout/candidate-layout.routing.ts");
/* harmony import */ var _angular_material_button__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/material/button */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/button.js");
/* harmony import */ var _angular_material_input__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/material/input */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/input.js");
/* harmony import */ var _angular_material_core__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/material/core */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/core.js");
/* harmony import */ var _angular_material_form_field__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @angular/material/form-field */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/form-field.js");
/* harmony import */ var _angular_material_tooltip__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @angular/material/tooltip */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/tooltip.js");
/* harmony import */ var _angular_material_icon__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @angular/material/icon */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/icon.js");
/* harmony import */ var _angular_material_select__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! @angular/material/select */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/select.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/__ivy_ngcc__/fesm5/http.js");
/* harmony import */ var _providers_list__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./providers-list */ "./src/app/layouts/candidate-layout/providers-list.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};














var CandidateLayoutModule = /** @class */ (function () {
    function CandidateLayoutModule() {
    }
    CandidateLayoutModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
                _angular_router__WEBPACK_IMPORTED_MODULE_1__["RouterModule"].forChild(_candidate_layout_routing__WEBPACK_IMPORTED_MODULE_4__["CandidateLayoutRoutes"]),
                _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormsModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_3__["ReactiveFormsModule"],
                _angular_material_button__WEBPACK_IMPORTED_MODULE_5__["MatButtonModule"],
                _angular_material_core__WEBPACK_IMPORTED_MODULE_7__["MatRippleModule"],
                _angular_material_form_field__WEBPACK_IMPORTED_MODULE_8__["MatFormFieldModule"],
                _angular_material_input__WEBPACK_IMPORTED_MODULE_6__["MatInputModule"],
                _angular_material_select__WEBPACK_IMPORTED_MODULE_11__["MatSelectModule"],
                _angular_material_tooltip__WEBPACK_IMPORTED_MODULE_9__["MatTooltipModule"],
                _angular_material_icon__WEBPACK_IMPORTED_MODULE_10__["MatIconModule"],
                _angular_common_http__WEBPACK_IMPORTED_MODULE_12__["HttpClientModule"]
            ],
            declarations: [],
            providers: _providers_list__WEBPACK_IMPORTED_MODULE_13__["ProvidersList"]
        })
    ], CandidateLayoutModule);
    return CandidateLayoutModule;
}());



/***/ }),

/***/ "./src/app/layouts/candidate-layout/candidate-layout.routing.ts":
/*!**********************************************************************!*\
  !*** ./src/app/layouts/candidate-layout/candidate-layout.routing.ts ***!
  \**********************************************************************/
/*! exports provided: CandidateLayoutRoutes */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CandidateLayoutRoutes", function() { return CandidateLayoutRoutes; });
/* harmony import */ var app_components_jobApplication_jobApplication_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! app/components/jobApplication/jobApplication.component */ "./src/app/components/jobApplication/jobApplication.component.ts");
/* harmony import */ var app_components_jobApplication_add_job_application_add_job_application_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! app/components/jobApplication/add-job-application/add-job-application.component */ "./src/app/components/jobApplication/add-job-application/add-job-application.component.ts");
/* harmony import */ var app_components_jobApplication_my_applications_my_applications_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! app/components/jobApplication/my-applications/my-applications.component */ "./src/app/components/jobApplication/my-applications/my-applications.component.ts");
/* harmony import */ var app_components_job_post_job_post_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! app/components/job-post/job-post.component */ "./src/app/components/job-post/job-post.component.ts");
/* harmony import */ var app_components_assessment_submitassessment_submitassessment_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! app/components/assessment/submitassessment/submitassessment.component */ "./src/app/components/assessment/submitassessment/submitassessment.component.ts");
/* harmony import */ var app_components_Resume_resume_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! app/components/Resume/resume.component */ "./src/app/components/Resume/resume.component.ts");
/* harmony import */ var app_components_candidate_candidate_profile_candidate_profile_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! app/components/candidate/candidate-profile/candidate-profile.component */ "./src/app/components/candidate/candidate-profile/candidate-profile.component.ts");







var CandidateLayoutRoutes = [
    {
        path: '',
        redirectTo: 'jobApplication',
        pathMatch: 'full',
    },
    // { path: 'dashboard',    component: DashboardComponent },
    // { path: 'assessment',      component: AssessmentComponent },
    { path: 'jobApplication', component: app_components_jobApplication_jobApplication_component__WEBPACK_IMPORTED_MODULE_0__["JobApplicationComponent"] },
    { path: 'resume', component: app_components_Resume_resume_component__WEBPACK_IMPORTED_MODULE_5__["ResumeComponent"] },
    { path: 'my-applications', component: app_components_jobApplication_my_applications_my_applications_component__WEBPACK_IMPORTED_MODULE_2__["MyApplicationsComponent"] },
    // { path: 'allApplications',  component: AllApplicationsComponent},
    { path: 'jobApplication', component: app_components_jobApplication_jobApplication_component__WEBPACK_IMPORTED_MODULE_0__["JobApplicationComponent"] },
    { path: 'resume', component: app_components_Resume_resume_component__WEBPACK_IMPORTED_MODULE_5__["ResumeComponent"] },
    { path: 'my-applications', component: app_components_jobApplication_my_applications_my_applications_component__WEBPACK_IMPORTED_MODULE_2__["MyApplicationsComponent"] },
    { path: 'addjobApplication/:id', component: app_components_jobApplication_add_job_application_add_job_application_component__WEBPACK_IMPORTED_MODULE_1__["AddJobApplicationComponent"] },
    { path: 'submitassessment/:id', component: app_components_assessment_submitassessment_submitassessment_component__WEBPACK_IMPORTED_MODULE_4__["SubmitassessmentComponent"] },
    { path: 'candidate-profile/:id', component: app_components_candidate_candidate_profile_candidate_profile_component__WEBPACK_IMPORTED_MODULE_6__["CandidateProfileComponent"] },
    // { path: 'updateJobApplication/:id',  component: UpdateJobApplicationComponent},
    // { path: 'addassessment',      component: AddassessmentComponent },
    // { path: 'addemployer', component: AddemployerComponent },
    // { path: 'users',      component: UsersComponent },
    // { path: 'employers',      component: EmployerComponent },
    { path: 'job-posts', component: app_components_job_post_job_post_component__WEBPACK_IMPORTED_MODULE_3__["JobPostComponent"] },
];


/***/ }),

/***/ "./src/app/layouts/candidate-layout/providers-list.ts":
/*!************************************************************!*\
  !*** ./src/app/layouts/candidate-layout/providers-list.ts ***!
  \************************************************************/
/*! exports provided: ProvidersList */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProvidersList", function() { return ProvidersList; });
/* harmony import */ var _providers_http_http_service__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../providers/http/http.service */ "./src/app/providers/http/http.service.ts");
/* harmony import */ var _data_user_user_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../data/user/user.service */ "./src/app/data/user/user.service.ts");
/* harmony import */ var _data_assessment_assessment_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../data/assessment/assessment.service */ "./src/app/data/assessment/assessment.service.ts");



var ProvidersList = [
    _providers_http_http_service__WEBPACK_IMPORTED_MODULE_0__["HttpService"],
    _data_user_user_service__WEBPACK_IMPORTED_MODULE_1__["UserService"],
    _data_assessment_assessment_service__WEBPACK_IMPORTED_MODULE_2__["AssessmentService"]
];


/***/ })

}]);
//# sourceMappingURL=layouts-candidate-layout-candidate-layout-module.js.map