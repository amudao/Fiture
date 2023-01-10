#Fiture is an all encompassing financial web app designed to assist and help users with all forms of financial decision. Includes ability to buy and sell shares, create and maintain spending and saving goals. Includes an amazing bot and chat system meant to reduce any stress users might come across

Detail of each file:
1.	Inside folder , index.php file redirect to home.html page, (we have all frontend pages inside eb/frontend).
2.	After signup and signIn we can redirect to folder eb/admin.
3.	Inside admin folder we have home.php page which shows dashboard home page (include daily budget and daily expense data and search bar for getting data according to category).
4.	Click on “budget management” then we redirected to admin/budget folder, where index.php is file for showing data of budget for user and when we click on “add new” then we can go to “manage_budget.php” to store and retrieve the data.
5.	Click on “expense management” then we redirected to admin/expense folder, where index.php is file for showing data of expense for user and when we click on “add new” then we can go to “manage_expense php” to store and retrieve the data.
6.	When we click on  reports “expense” or  “budget”, then we can redirected to “admin/reports”, budget.php is file to show the data of budget where you search data by date by using filter  and download it into pdf. expense.php is file to show the data of expense where you search data by date by using filter  and download it into pdf.
7.	When we click on category, then we can redirect to “admin/maintainance”, where we have category.php and manage_category.php file to add, edit and delete to category, also we have search bar for searchinf category.
8.	Inside plugin folder we have some files for datatables(data tables are used for easilt sort and search of data.)
9.	Inside classes folder we have file for db configuration and all the “CRUD – (create read update delete)” operation are performed over here, it means all functions for CRUD operation are build into classes folder.. 


Web app is built using Bootstrap, HTML/CSS, javascript, php, mysql, SASS, Jquery


