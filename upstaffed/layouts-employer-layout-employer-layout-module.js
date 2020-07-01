(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["layouts-employer-layout-employer-layout-module"],{

/***/ "./src/app/layouts/employer-layout/employer-layout.module.ts":
/*!*******************************************************************!*\
  !*** ./src/app/layouts/employer-layout/employer-layout.module.ts ***!
  \*******************************************************************/
/*! exports provided: EmployerLayoutModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EmployerLayoutModule", function() { return EmployerLayoutModule; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/__ivy_ngcc__/fesm5/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/__ivy_ngcc__/fesm5/router.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/__ivy_ngcc__/fesm5/common.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/__ivy_ngcc__/fesm5/forms.js");
/* harmony import */ var _employer_layout_routing__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./employer-layout.routing */ "./src/app/layouts/employer-layout/employer-layout.routing.ts");
/* harmony import */ var _angular_material_button__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @angular/material/button */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/button.js");
/* harmony import */ var _angular_material_input__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/material/input */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/input.js");
/* harmony import */ var _angular_material_core__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @angular/material/core */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/core.js");
/* harmony import */ var _angular_material_form_field__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @angular/material/form-field */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/form-field.js");
/* harmony import */ var _angular_material_tooltip__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @angular/material/tooltip */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/tooltip.js");
/* harmony import */ var _angular_material_icon__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @angular/material/icon */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/icon.js");
/* harmony import */ var _angular_material_select__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! @angular/material/select */ "./node_modules/@angular/material/__ivy_ngcc__/fesm5/select.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/__ivy_ngcc__/fesm5/http.js");
/* harmony import */ var _providers_list__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./providers-list */ "./src/app/layouts/employer-layout/providers-list.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};














var EmployerLayoutModule = /** @class */ (function () {
    function EmployerLayoutModule() {
    }
    EmployerLayoutModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModule"])({
            imports: [
                _angular_common__WEBPACK_IMPORTED_MODULE_2__["CommonModule"],
                _angular_router__WEBPACK_IMPORTED_MODULE_1__["RouterModule"].forChild(_employer_layout_routing__WEBPACK_IMPORTED_MODULE_4__["EmployerLayoutRoutes"]),
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
    ], EmployerLayoutModule);
    return EmployerLayoutModule;
}());



/***/ }),

/***/ "./src/app/layouts/employer-layout/employer-layout.routing.ts":
/*!********************************************************************!*\
  !*** ./src/app/layouts/employer-layout/employer-layout.routing.ts ***!
  \********************************************************************/
/*! exports provided: EmployerLayoutRoutes */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "EmployerLayoutRoutes", function() { return EmployerLayoutRoutes; });
/* harmony import */ var _components_assessment_assessment_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../components/assessment/assessment.component */ "./src/app/components/assessment/assessment.component.ts");
/* harmony import */ var _components_jobApplication_add_job_application_add_job_application_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../components/jobApplication/add-job-application/add-job-application.component */ "./src/app/components/jobApplication/add-job-application/add-job-application.component.ts");
/* harmony import */ var _components_jobApplication_my_applications_my_applications_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../components/jobApplication/my-applications/my-applications.component */ "./src/app/components/jobApplication/my-applications/my-applications.component.ts");
/* harmony import */ var _components_job_post_job_post_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../components/job-post/job-post.component */ "./src/app/components/job-post/job-post.component.ts");
/* harmony import */ var _components_assessment_addassessment_addassessment_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../components/assessment/addassessment/addassessment.component */ "./src/app/components/assessment/addassessment/addassessment.component.ts");
/* harmony import */ var _components_Resume_resume_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../components/Resume/resume.component */ "./src/app/components/Resume/resume.component.ts");
/* harmony import */ var _components_employer_employer_profile_employer_profile_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../components/employer/employer-profile/employer-profile.component */ "./src/app/components/employer/employer-profile/employer-profile.component.ts");
/* harmony import */ var app_components_assessment_updateassessment_updateassessment_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! app/components/assessment/updateassessment/updateassessment.component */ "./src/app/components/assessment/updateassessment/updateassessment.component.ts");
/* harmony import */ var app_components_assessment_reviewassessment_reviewassessment_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! app/components/assessment/reviewassessment/reviewassessment.component */ "./src/app/components/assessment/reviewassessment/reviewassessment.component.ts");
/* harmony import */ var app_components_assessment_viewassessment_viewassessment_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! app/components/assessment/viewassessment/viewassessment.component */ "./src/app/components/assessment/viewassessment/viewassessment.component.ts");










var EmployerLayoutRoutes = [
    {
        path: '',
        redirectTo: 'assessment',
        pathMatch: 'full',
    },
    // { path: 'dashboard',    component: DashboardComponent },
    { path: 'assessment', component: _components_assessment_assessment_component__WEBPACK_IMPORTED_MODULE_0__["AssessmentComponent"] },
    // { path: 'jobApplication',  component: JobApplicationComponent},
    { path: 'resume', component: _components_Resume_resume_component__WEBPACK_IMPORTED_MODULE_5__["ResumeComponent"] },
    { path: 'my-applications', component: _components_jobApplication_my_applications_my_applications_component__WEBPACK_IMPORTED_MODULE_2__["MyApplicationsComponent"] },
    { path: 'addjobApplication/:id', component: _components_jobApplication_add_job_application_add_job_application_component__WEBPACK_IMPORTED_MODULE_1__["AddJobApplicationComponent"] },
    // { path: 'updateJobApplication/:id',  component: UpdateJobApplicationComponent},
    // { path: 'addassessment',      component: AddassessmentComponent },
    // { path: 'addemployer', component: AddemployerComponent },
    // { path: 'users',      component: UsersComponent },
    // { path: 'employers',      component: EmployerComponent },
    { path: 'job-posts', component: _components_job_post_job_post_component__WEBPACK_IMPORTED_MODULE_3__["JobPostComponent"] },
    { path: 'employer-profile/:id', component: _components_employer_employer_profile_employer_profile_component__WEBPACK_IMPORTED_MODULE_6__["EmployerProfileComponent"] },
    { path: 'addassessment', component: _components_assessment_addassessment_addassessment_component__WEBPACK_IMPORTED_MODULE_4__["AddassessmentComponent"], pathMatch: 'full' },
    { path: 'updateassessment', component: app_components_assessment_updateassessment_updateassessment_component__WEBPACK_IMPORTED_MODULE_7__["UpdateassessmentComponent"] },
    { path: 'reviewassessment/:id', component: app_components_assessment_reviewassessment_reviewassessment_component__WEBPACK_IMPORTED_MODULE_8__["ReviewassessmentComponent"] },
    { path: 'viewassessment/:id', component: app_components_assessment_viewassessment_viewassessment_component__WEBPACK_IMPORTED_MODULE_9__["ViewassessmentComponent"] },
    { path: 'updateassessment/:id', component: app_components_assessment_updateassessment_updateassessment_component__WEBPACK_IMPORTED_MODULE_7__["UpdateassessmentComponent"] },
];


/***/ }),

/***/ "./src/app/layouts/employer-layout/providers-list.ts":
/*!***********************************************************!*\
  !*** ./src/app/layouts/employer-layout/providers-list.ts ***!
  \***********************************************************/
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
//# sourceMappingURL=layouts-employer-layout-employer-layout-module.js.map