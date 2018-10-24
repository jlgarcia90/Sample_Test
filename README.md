# Sample_Test

#Intro

Hi,

I will be attempting to create a web application to take information in, and use a method to secure the data before the charge. I will admit that I have not created a web applicattion from scratch. Most of my experience has been based off a working sample, and building it up from there. The way I plan to do this is the following:

1. Create a local host for the site to live at
  -install/use wamp and phpmyadmin to act as the server
2. Display a page to ask for input card data and save the data to send to another site to charge the card
  -the form will ask for bare minimal to make a payment
3. Use VGS to secure the data before transmission and be able to decrpyt it

Let us give this a whirl. 

Best,

JL

#Workflow Idea

The end user would go to the locally hosted site ie: localhost:8080/file_path/signeddatafields.php. Then fill out the information to be called back on the next page that will ask for the card info localhost:8080/file_path/unsigneddatafields.php. Before the charge is made the data is sent to the VGS endpoint to encrypt the data. Once the encryption is completed the receipt will pop up with the customer's information and the secret. 
