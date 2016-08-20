# Poloniex Mass Withdraw for XMR

Poloniex XMR withdraws are limited to 1000 XMR per withdraw, this means it very time consuming to withdraw large amounts. This script solves that by withdrawing 1000 XMR to your address with a loop. E.g if you have 10000 XMR on polo, you can enter "10" and the script will use the withdraw API to request 10 withdraws of 1000 XMR to your address. 
 
Before you can run the script you need to enable withdraw API in poloniex then edit index.php and enter your API details and XMR address. I recommend that you bind API withdraw in poloniex to your IP. 
 
You can run the script from command line, simply by running:
```
php index.php 
```

The script will ask you for details of your withdraw.