# Challenge for Software Developer
To better assess a candidates development skills, we would like to provide the following challenge.  You have as much time as you'd like (though we ask that you not spend more than a few hours).

There are two jobs that both use this challenge:

1. Senior Software RoR Developer: You must use Ruby/Ruby on Rails.
1. Senior Software PHP Developer: You must use PHP.

In both cases, the email address you should use for submission is [github@letsbonus.com](github@letsbonus.com). 

Feel free to email the appropriate address above if you have any questions.

## Submission Instructions
1. First, fork this project on github. You will need to create an account if you don't already have one.
1. Next, complete the project as described below within your fork.
1. Finally, push all of your changes to your fork on github and submit a pull request. You should also email to the address listed in the first section and your recruiter to let them know you have submitted a solution. Make sure to include your github username in your email (so we can match people with pull requests).

## Alternate Submission Instructions (if you don't want to publicize completing the challenge)
1. Clone the repository
1. Next, complete your project as described below within your local repository
1. Email a patch file to the address listed in the first section.

## Project Description
Imagine that Letsbonus has just acquired a new company.  Unfortunately, the company has never stored their data in a database and instead uses a plain text file.  We need to create a way for the new subsidiary to import their data into a database.  Your task is to create a web interface that accepts file uploads, normalizes the data, and then stores it in a relational database.

- Create a table to store product info:
  - Title
  - Description (from a WYSIWYG editor)
  - Price
  - Init Date
  - Expiry Date
  - Status
  - *And all other columns that you consider important*


- Here's what your web-based application must do:

  1. Your app must accept (via a form) a tab delimited file with the following columns: item title, item description, item price, item init date, item expiry date, merchant address, and merchant name.  You can assume the columns will always be in that order, that there will always be data in each column, and that there will always be a header line.  An example input file named example_input.tab is included in this repo.
  1. Your app must parse the given file, normalize the data, and store the information in a relational database.
  1. After upload, your application should display a count of product per month and a count of product per merchant.


- Your application does not need to:

  1. handle authentication or authorization (bonus points if it does, extra bonus points if authentication is via OpenID).
  1. be aesthetically pleasing.


- You should consider:

  1. All queries should be manually generated.
  1. If you are applying for the Senior Software PHP Developer, use of Zend Framework 1 will be appreciated.

Your application should be easy to set up and should run on either Linux or Mac OS X.  It should not require any for-pay software.

## Evaluation
Evaluation of your submission will be based on the following criteria. Additionally, reviewers will attempt to assess your familiarity with standard libraries. Reviewers will attempt to assess your experience with object-oriented programming based on how you've structured your submission.

1. Did your application fulfill the basic requirements?
1. Did you document the method for setting up and running your application?
1. Did you follow the instructions for submission?