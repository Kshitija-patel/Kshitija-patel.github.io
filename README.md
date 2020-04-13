# Online-Tutoring-and-Learning

### Replicate Repository: https://github.com/2020-Winter-HTTP-5202-A/project-phase-one-hetkansara

### Webiste URL : http://priyankakhadilkar.com/onlinetutor/

Web Developers: Togather we have worked on the designing of website and decided the project structure.

## 1) Priyanka 
  - Feature One : Authentication and User Profile Management.This feature is completed and working.which
includes following functionality.
  1. Login 
  2. Logout
  3. Session Management 
  4. ChangePassword
  5. Register
  6. My Profile Page
  7. Forgot Password
  
  | File | Description | Author |
  | ------- | ----------- | ----- |
  | login.php | It's file for login form into system.It has link to register and forgot password | Priyanka Khadilkar |
  | register.php | This file contains form to register into system as a student role. | Priyanka Khadilkar | 
  | logout.php | This file contains code to logout from the system and redirect to Login page. | Priyanka Khadilkar |
  | resetPassword.php | This file contains form to reset password. | Priyanka Khadilkar |
  | utilities/ConstantStr.php | This file contains all the constant configuration. | Priyanka Khadilkar |
  | EmailUtility.php | This file contains method to send emails and email template for email. | Priyanka Khadilkar |
  | utilities/Session.php | This file contains all method to get and set session variables and values. | Priyanka Khadilkar |
  | admin/myProfile.php | This file contains form to show the profile data of logged in user and user can change the profile data. | Priyanka Khadilkar |
  | admin/changePassword.php | This file contains form to change password of logged in user. | Priyanka Khadilkar |
  | database/classes/models/User.php | This file contains all the properties of user. | Priyanka Khadilkar |
  | database/classes/models/UserRoles.php | This file contains constant variables holding roles. | Priyanka Khadilkar |
  | database/classes/connect.php | This file contains the database connection string to be used throughout the project | Priyanka Khadilkar |
  | database/classes/UserContext.php |That file contains all the functions to communicate to the database for user table (All CRUD Functions). | Priyanka Khadilkar |

 
  - Feature Two : 
  1. Job Post (CRUD - Admin view, Public View)
  2. Job Applications(Public and Admin views)
 
  | File | Description | Author |
  | ------- | ----------- | ----- |
  | admin/jobPostAdd.php | This file contains form to add job opening. | Priyanka Khadilkar |
  | admin/jobPosts.php| This file contains Listing and search in list. | Priyanka Khadilakr | 
  | admin/jobPostUpdate.php | This file contains form to update job opening. | Priyanka Khadilkar |
  | admin/jobPostView.php | This file contains form to reset password. | Priyanka Khadilakr |
  | jobListing.php | This file contains listing of all job list to public view | Priyanka Khadilakr |
  | jobApply.php | This file contains form for Guest user to apply for the job  | Priyanka Khadilakr |
  | admin/jobApplications.php | This file contains list of all job applications. | Priyanka Khadilakr |
  | admin/emailToJobApplicant.php | This file contains form to send an email to job applicants. | Priyanka Khadilakr |
  | database/connect.php | That file contains the database connection string to be used throughout the project | Priyanka Khadilkar |
  | database/classes/models/JobPost.php | This file contains all the properties of JobPost. | Priyanka Khadilkar |
  | database/classes/models/JobApplication.php | This file contains all the properties of JobApplication. | Priyanka Khadilkar |
  | database/classes/JobApplicationContext.php | This file contains all the functions to communicate to the database for JobApplication table (All CRUD Functions). | Priyanka Khadilkar |
  | database/classes/JobPostContext.php | This file contains all the functions to communicate to the database for Jobpost table (All CRUD Functions). | Priyanka Khadilkar |
  | composer.json | Implemented composer for resolving dependencies | Priyanka Khadilkar |    
  | errorLog/errorHandle.php | Implemented error handling log file | Priyanka Khadilkar |    

## 2) Het
  - Feature One: Mock Test Questions Management
  1. Mock Test Questions & Options CRUD
  2. Search for Mock Test Questions

  | File | Description | Author |
  | ------- | ----------- | ----- |
  | admin/mockTests.php | It's the listing file for mock tests and mock test questions. It contains two tabs for mock test listing and the listing of mock test questions | Het Kansara |
  | admin/addUpdateMockTestOption.php | That file contains the form to add/update mock test option. | Het Kansara | 
  | admin/addUpdateMockTestQuestion.php | That file contains the form to add/update mock test question. | Het Kansara |
  | database/MockTestQuestionContext.php | That file contains all the functions to communicate to the database (All CRUD Functions). | Het Kansara |
  | database/connect.php | That file contains the database connection string to be used throughout the project | Priyanka Khadilkar |

  - Feature Two: Mock Tests Management
  1. Mock Test CRUD
  2. Search for Mock Tests
  3. Add/Remove Questions into/from Mock tests

  | File | Description | Author |
  | ------- | ----------- | ----- |
  | admin/mockTests.php | It's the listing file for mock tests and mock test questions. It contains two tabs for mock test listing and the listing of mock test questions | Het Kansara |
  | admin/addUpdateMockTest.php | That file contains the form to add/update mock tests. | Het Kansara | 
  | admin/showMockTest.php | That file contains the mock test detail view with option to add/remove questions into mock test. | Het Kansara |
  | database/MockTestContext.php | That file contains all the functions to communicate to the database (All CRUD Functions). | Het Kansara |
  | database/connect.php | That file contains the database connection string to be used throughout the project | Priyanka Khadilkar |
  | admin/attemptMockTest.php | This file contains the dynamic paper generated for specific mock test | Het Kansara |
  | admin/mockTestEnroll.php | This file contains the listing of mock tests to the user to enroll and show result of previous mock tests. | Het Kansara |

## 3) Shubham
  - Feature One: Learning Rooms
  1. Add New Rooms
  2. Edit Rooms
  3. Listing Rooms
  4. Deleting Rooms

  - Feature Two: Tutor Apoointment
    [CRUD on Tutor Appointments]

## 4) Kshitija
  - Feature One: FAQ 
  1. Add new FAQ.
  2. List all FAQs.
  3. Update FAQ.
  4. Delete FAQ.

  | File | Description | Author |
  | ------- | ----------- | ----- |
  | faqAdd.php | This file contains code to add new faq by admin | Kshitija Patel |
  | faqList.php | This file contains code to list all the faqs for admin. From here the admin can add, update or delete any faq | Kshitija Patel | 
  | faqUpdate.php | This file contains code to update the existing faq. | Kshitija Patel |
  | faqlist.php | This file contains code to list the faqs for users. | Kshitija Patel |
  | faqContext.php | This file contains the fuctions such as add,update,list,delete and search for faqs. | Kshitija Patel |

  - Feature Two: User Management
  1. Add new user from admin side.
  2. Update that user information.
  3. Delete the user.
  4. List all the users.


  | File | Description | Author |
  | ------- | ----------- | ----- |
  | addUser.php | This file contains the code to add new user(student,tutor or admin) by admin. | Kshitija Patel |
  | listUsers.php | This file contains code to list all the users to admin. From here the admin can search a particular user by first name ,update the particular user ,delete any user. There is a dropdown menu if the admin wants the list of only students or admin or tutors. | Kshitija Patel |
  | showUser.php | This file contains code to show the details of a particular user. | Kshitija Patel |
  | updateUser.php | This file contains code to update the information of a selected user. | Kshitija Patel |
  | UserAdminContext.php |  This file contains the fuctions such as add,update,list,delete and search. |  Kshitija Patel |
  | EmailUtility.php | This file contains method to send emails and email template for new registration password reset link. |  Kshitija Patel |

## 5) Maitri
  - Feature One : Website contact us details and the list of users who fill in the form of contact page.This feature is completed and working, which includes following functionality.
  1. Add website contact details.
  2. Update contact details.
  3. Show contact details on user as well as on admin side. 
  4. Add user contact details
  5. List of all user contact details.
  6. Delete user contact details.
  7. Search user contact details.