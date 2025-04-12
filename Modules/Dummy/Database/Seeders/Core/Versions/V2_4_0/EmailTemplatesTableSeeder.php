<?php

namespace Modules\Dummy\Database\Seeders\Core\Versions\V2_4_0;

use App\Models\EmailTemplate;
use Illuminate\Database\Seeder;

class EmailTemplatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        if (EmailTemplate::where('slug', 'order')->where('body', 'like', '%shipping_provider_name%')->doesntExist()) {
            EmailTemplate::where('slug', 'order')->delete();
            \DB::table('email_templates')->insert([
                'parent_id' => null,
                'name' => 'order',
                'slug' => 'order',
                'subject' => 'Your Invoice # {invoice_reference_no} from {company_name} has been created.',
                'body' => '<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>3.Invoice</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style type="text/css">
@media screen {
@font-face {
font-family: "DM Sans";
font-weight: 700;
src: url(https://fonts.gstatic.com/s/dmsans/v11/rP2Cp2ywxg089UriASitCBimCw.woff2) format("woff2");
}

@font-face {
font-family: "DM Sans";
font-weight: 500;
font-style: normal;
src: url(https://fonts.gstatic.com/s/dmsans/v11/rP2Cp2ywxg089UriAWCrCBimCw.woff2) format("woff2");
}

@font-face {
font-family: \'Roboto\';
font-style: normal;
font-weight: 500;
src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format(\'woff2\');
unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
}

.bodys,
.tables,
td,
.anchor-tag a {
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
}

.tables,
td {
mso-table-rspace: 0pt;
mso-table-lspace: 0pt;
}

.anchor-tag a {
padding: 1px;
margin: 1px;
}

.anchor-tag a[x-apple-data-detectors] {
font-family: inherit !important;
font-size: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
color: inherit !important;
text-decoration: none !important;
}

.bodys {
width: 100% !important;
height: 100% !important;
padding: 0 !important;
margin: 0 !important;
}

.tables {
border-collapse: collapse !important;
}

.logo-img {
margin: 26px 0px 19px 0px;
padding: 0px;
width: 207.98px;
height: 56px;
}

.actives {
box-sizing: border-box;
text-decoration: none;
-webkit-text-size-adjust: none;
text-align: center;
border-radius: 2px;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
-khtml-border-radius: 2px;
-o-border-radius: 2px;
-ms-border-radius: 2px;
padding: 10px 31px;
cursor: pointer;
background: #fcca19;
}

.anchor-tag a:focus,
.anchor-tag a:hover {
text-decoration: underline;
text-decoration-color: #fcca19;
}

.anchor-tag a:-webkit-any-link {
color: -webkit-link;
cursor: pointer;
text-decoration: underline;
text-decoration-color: #fcca19;
}

.anchor-tag a:-webkit-any-link {
color: -webkit-link;
cursor: pointer;
text-decoration: none;
text-decoration-color: #fcca19;
}
#tracking-table {
    width: 100%;
    border-collapse: collapse;
}

#tracking-table th, #tracking-table td {
    border: 1px solid black;
    padding: 8px;
}

#tracking-table th {
    text-align: left;
    background-color: #f2f2f2;
}

#tracking-table td {
    text-align: center;
}

#order-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

#order-table th, #order-table td {
    border: 1px solid #333;
    padding: 10px;
}

#order-table th {
    text-align: left;
}

#order-table td {
    text-align: left;
}
</style>
</head>

<body class="bodys" style="background-color: #e9ecef">
<div class="preheader"
style="display: none; max-width: 0; max-height: 0; margin: 0px; overflow: hidden; color: #fff; opacity: 0;">
</div>
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" bgcolor="#e9ecef">
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px">
<tr>
<td align="center" valign="top" style="padding: 36px 24px"></td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" bgcolor="#e9ecef">
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%"
style="max-width: 640px; margin-top: 100px">
<tr>
<td align="center" bgcolor="#ffffff">
<img class="logo-img" src="{logo}" alt="logo" />
<p style="border-top: 1px solid #dfdfdf; margin: 1px 20px 0px 20px;"></p>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" bgcolor="#e9ecef">
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%"
style="max-width: 640px; font-family: \'DM Sans\', sans-serif; font-weight: 500;">
<tr>
<td align="center" bgcolor="#fff">
<p
style="font-family: \'DM Sans\', sans-serif; letter-spacing: 0.255em; text-transform: uppercase; margin: 28px 0px 20px 0px; line-height: 25px; font-size:14px !important; color: rgb(44, 44, 44); font-weight: 500 !important; cursor: default !important;">
Your Order is confirmed</p>
<p
style="margin: 0px; font-family: \'DM Sans\', sans-serif; font-style: normal; font-weight: 500; font-size: 14px; line-height: 28px; text-align: center; color: #2C2C2C;">
ORDER INVOICE</p>
<p style="margin-top: 5px;font-family: \'DM Sans\', sans-serif;  font-style: normal; font-weight: 700;
font-size: 32px; line-height: 28px; text-align: center; color: #2C2C2C;">{order_number}
</p>
<p style="margin-top: 32px; padding:0px 30px 0px 37px; font-family: \'DM Sans\', sans-serif; text-align: left; font-style: normal; font-weight: 500; font-size: 14px; line-height: 24px; color: #898989;
"><span style="color: #2C2C2C;">Dear {user_name},</span> your order placed on
<a href="{company_url}" style="color:#0060A9 ; text-decoration:underline;">{company_name}</a>
has been
confirmed on <span style="color: #2C2C2C;">{order_confirm_date}.</span> Your order is
being prepared for delivery. To cancel your order or for further information, login to
your account or call us: <span style="color: #2C2C2C;"> {contact_number}.</span></p>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" bgcolor="#e9ecef">
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%"
style="max-width: 640px; font-family: \'DM Sans\', sans-serif; font-weight: 500;">
<tr>
<td align="center" bgcolor="#ffffff">
<div style="margin: 29px 20px 0px 37px;">
<p
style="font-family: \'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 18px; margin-top: 2px; line-height: 28px; color: #2C2C2C; float: left; text-align: left; padding-top: 4px;">
ORDER DETAILS</p>
<a href="{order_track_url}" aria-pressed="true" class="actives anchor-tag"
style="font-family: \'DM Sans\',sans-serif; font-style: normal; display:flex; font-weight: 700; float:right; font-size: 14px; line-height: 28px; color: #2C2C2C;">
Check Order</a>
</div>
<div style="clear: both;"></div>
<div style="margin:14px 20px;">
<table class="tables" id="customers" border="0" cellpadding="0" cellspacing="0"
width="100%" style="text-align: left;">
<tr style="align-items:left;">
<th style="padding-left: 18px;">Items</th>
<th>Seller</th>
<th style="padding-left:18px;">Qty</th>
<th>Price</th>
</tr>
<tr>
{products}
<tr>
<td></td>
<td
style="font-family:\'DM Sans\', sans-serif; border-bottom: 1px solid #DFDFDF; font-style: normal; font-weight: 500; font-size: 14px; line-height: 18px; color: #898989;">
<p style="margin: 1px; padding-top:24px;">Subtotal </p>
<p style="margin: 1px; padding-top:24px;">Shipping </p>
<p style="margin: 1px; padding-top:24px;">Tax </p>
<p style="margin: 1px; padding:16px 0px;">Discount </p>
</td>
<td style="border-bottom: 1px solid #DFDFDF;">
</td>
<td
style="font-family:\'DM Sans\', sans-serif;  border-bottom: 1px solid #DFDFDF; font-style: normal; font-weight: 500; font-size: 14px; line-height: 18px; color: #898989;">
<p style="margin: 0; padding-top:24px; margin-top:1px;">
{currency_symbol}{subtotal}</p>
<p style="margin: 0; padding-top:24px; margin-top:1px;">
{currency_symbol}{shipping_charge}</p>
<p style="margin: 0; padding-top:24px; margin-top:1px;">
{currency_symbol}{tax_charge}</p>
<p style="margin: 0;padding:16px 0px; margin-top:1px;">
{currency_symbol}{discount_amount}</p>
</td>
</tr>
<tr>
<td></td>
<td
style="font-family: \'DM Sans\', sans-serif; font-style: normal;font-weight:500; font-size: 14px;line-height: 18px; padding-top: 16px; color: #2C2C2C;">
Grand Total</td>
<td></td>
<td
style="font-family: \'DM Sans\', sans-serif; font-style:normal; font-weight:500; font-size: 14px;line-height: 18px; padding-top: 16px; color: #2C2C2C;">
{currency_symbol}{grand_total}</td>
</tr>
</table>
{download}
</div>
<div style="clear: both;"></div>
<div style="margin:14px 20px; {shipping_tracking_count}">
<p
style="font-family: \'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 18px; margin-top: 2px; line-height: 28px; color: #2C2C2C; float: left; text-align: left; padding-top: 4px;">
Tracking Information</p>
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%"
style="max-width: 640px; font-family: \'DM Sans\', sans-serif; font-weight: 500;" id="order-table">
  <thead>
    <tr>
      <th style="{shipping_item_name}">Item</th>
      <th style="{shipping_provider_name}">Provider</th>
      <th style="{shipping_tracking_number}">Tracking Number</th>
      <th style="{date_shipped}">Date</th>
      <th style="{shipping_tracking_url}">Tracking Url</th>
    </tr>
  </thead>
  <tbody>
            {shipping_tracks}
  </tbody>
</table>
</div>
<div style="margin:30px 20px; background-color: #F3F3F3; border-radius: 4px;">
<div>
<p
style="font-family: \'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 18px; line-height: 28px; padding: 20px 14px 11px 14px ; text-align: left; padding-left:14px; margin-right:14px;color: #2C2C2C; margin-top: 1px;">
CUSTOMER DETAILS</p>
<p
style="border-bottom: 1px solid #DFDFDF; margin-left:14px; margin-top:1px; margin-right:14px;">
</p>
</div>
<div style="display:flex;">
<div style="margin-right:50px">
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 16px; line-height: 28px; padding: 20px 14px 0px 14px ; text-align: left; padding-left:14px; margin-right:14px;color: #2C2C2C; margin-top: 1px;">
SHIPPING ADDRESS</p>
<div
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 400; font-size: 14px; line-height: 24px;color: #2C2C2C; padding: 5px 0px 43px 14px; text-align: left; width: 200px; margin-top: 1px; width: 200px;">
{shipping_address}
</div>
</div>
<div style="padding-bottom: 24px; margin-left: 20px;">
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 16px; line-height: 28px; padding: 26px 14px 0px 14px ; text-align: left; margin-right:14px;color: #2C2C2C; margin-top: 1px;">
PAYMENT</p>
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 400; font-size: 14px; line-height: 24px; color: #2C2C2C; padding: 5px 0px 0px 14px; text-align: left; margin-top: 1px;">
{payment_method}</p>
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 16px; line-height: 28px; padding: 26px 14px 0px 14px ; text-align: left; margin-right:14px;color: #2C2C2C; margin-top: 1px;">
Track Code</p>
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 400; font-size: 14px; line-height: 24px; color: #2C2C2C; padding: 5px 0px 0px 14px; text-align: left; margin-top: 1px;">
{track_code}</p>
</div>
</div>
</div>
<div>
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 18px;line-height: 21px; margin-top:1px ;text-align:center; text-transform: uppercase; color: #2C2C2C;">
Keep in touch</p>
</div>
<div
style="margin-top: 1px; font-size: 14px; text-align: center; color: #898989; line-height: 22px; margin: 1px;">
<p style="margin-top:14px"> If you have any queries, concerns or suggestions,</p>
<p style="margin:0px; margin-top:1px"> please email us: <span
style="cursor: pointer; color: #0060A9; text-decoration: underline;">{support_mail}</span>
</p>
</div>
<p style="border-top: 1px solid #dfdfdf; margin: 1px 20px 0px 20px;"></p>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" bgcolor="#e9ecef">
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%"
style="max-width: 640px; font-family: \'DM Sans\', sans-serif; font-weight: 500; margin-bottom: 200px;">
<tr>
<td align="center" bgcolor="#ffffff">
<p
style="text-align: center; line-height: 16px; color: #898989; font-size: 12px; margin: 13px 0px;">
&copy; 2022, {company_name}. All rights reserved.</p>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>

</html>',
                'language_id' => 1,
                'status' => 'Active',
                'variables' => 'logo,order_number,user_name,shipping_item_name,shipping_provider_name,shipping_tracking_number,shipping_tracking_url,date_shipped,company_url,order_confirm_date,contact_number,order_track_url,currency_symbol,subtotal,shipping_charge,grand_total,shipping_address,payment_method,support_mail,company_name,tax_charge,discount_amount,track_code,products',
            ]);
        }

        if (EmailTemplate::where('slug', 'vendor-invoice')->where('body', 'like', '%shipping_provider_name%')->doesntExist()) {
            EmailTemplate::where('slug', 'vendor-invoice')->delete();
            \DB::table('email_templates')->insert([
                'parent_id' => null,
                'name' => 'Vendor Invoice',
                'slug' => 'vendor-invoice',
                'subject' => 'An Invoice # {invoice_reference_no} from {company_name} has been created.',
                'body' => '<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>3.Invoice</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style type="text/css">
@media screen {
@font-face {
font-family: "DM Sans";
font-weight: 700;
src: url(https://fonts.gstatic.com/s/dmsans/v11/rP2Cp2ywxg089UriASitCBimCw.woff2) format("woff2");
}

@font-face {
font-family: "DM Sans";
font-weight: 500;
font-style: normal;
src: url(https://fonts.gstatic.com/s/dmsans/v11/rP2Cp2ywxg089UriAWCrCBimCw.woff2) format("woff2");
}

@font-face {
font-family: \'Roboto\';
font-style: normal;
font-weight: 500;
src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format(\'woff2\');
unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
}

.bodys,
.tables,
td,
.anchor-tag a {
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
}

.tables,
td {
mso-table-rspace: 0pt;
mso-table-lspace: 0pt;
}

.anchor-tag a {
padding: 1px;
margin: 1px;
}

.anchor-tag a[x-apple-data-detectors] {
font-family: inherit !important;
font-size: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
color: inherit !important;
text-decoration: none !important;
}

.bodys {
width: 100% !important;
height: 100% !important;
padding: 0 !important;
margin: 0 !important;
}

.tables {
border-collapse: collapse !important;
}

.logo-img {
margin: 26px 0px 19px 0px;
padding: 0px;
width: 207.98px;
height: 56px;
}

.actives {
box-sizing: border-box;
text-decoration: none;
-webkit-text-size-adjust: none;
text-align: center;
border-radius: 2px;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
-khtml-border-radius: 2px;
-o-border-radius: 2px;
-ms-border-radius: 2px;
padding: 10px 31px;
cursor: pointer;
background: #fcca19;
}

.anchor-tag a:focus,
.anchor-tag a:hover {
text-decoration: underline;
text-decoration-color: #fcca19;
}

.anchor-tag a:-webkit-any-link {
color: -webkit-link;
cursor: pointer;
text-decoration: underline;
text-decoration-color: #fcca19;
}

.anchor-tag a:-webkit-any-link {
color: -webkit-link;
cursor: pointer;
text-decoration: none;
text-decoration-color: #fcca19;
}
</style>
</head>

<body class="bodys" style="background-color: #e9ecef">
<div class="preheader"
style="display: none; max-width: 0; max-height: 0; margin: 0px; overflow: hidden; color: #fff; opacity: 0;">
</div>
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td align="center" bgcolor="#e9ecef">
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px">
<tr>
<td align="center" valign="top" style="padding: 36px 24px"></td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" bgcolor="#e9ecef">
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%"
style="max-width: 640px; margin-top: 100px">
<tr>
<td align="center" bgcolor="#ffffff">
<img class="logo-img" src="{logo}" alt="logo" />
<p style=" border-top: 1px solid #dfdfdf; margin: 1px 20px 0px 20px;"></p>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" bgcolor="#e9ecef">
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%"
style=" max-width: 640px; font-family: \'DM Sans\', sans-serif; font-weight: 500;">
<tr>
<td align="center" bgcolor="#fff">
<p
style="font-family: \'DM Sans\', sans-serif; letter-spacing: 0.255em; text-transform: uppercase; margin: 28px 0px 20px 0px; line-height: 25px; font-size:14px !important; color: rgb(44, 44, 44); font-weight: 500 !important; cursor: default !important;">
Your Order is confirmed</p>
<p
style=" margin: 0px; font-family: \'DM Sans\', sans-serif; font-style: normal; font-weight: 500; font-size: 14px; line-height: 28px; text-align: center; color: #2C2C2C;">
ORDER INVOICE</p>
<p style=" margin-top: 5px;font-family: \'DM Sans\', sans-serif;  font-style: normal; font-weight: 700;
font-size: 32px; line-height: 28px; text-align: center; color: #2C2C2C;">{order_number}
</p>
<p style="margin-top: 32px; padding:0px 30px 0px 37px; font-family: \'DM Sans\', sans-serif; text-align: left; font-style: normal; font-weight: 500; font-size: 14px; line-height: 24px; color: #898989;
"><span style=" color: #2C2C2C;">Dear {user_name},</span> your order placed on <span
style="color:#0060A9 ; text-decoration:underline; ">{company_url}</span> has been
confirmed on <span style=" color: #2C2C2C;">{order_confirm_date}.</span> Your order is
being prepared for delivery. To cancel your order or for further information, login to
your account or call us: <span style=" color: #2C2C2C;"> {contact_number}.</span></p>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" bgcolor="#e9ecef">
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%"
style=" max-width: 640px; font-family: \'DM Sans\', sans-serif; font-weight: 500;">
<tr>
<td align="center" bgcolor="#ffffff">
<div style="margin: 29px 20px 0px 37px;">
<p
style="font-family: \'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 18px; margin-top: 2px; line-height: 28px; color: #2C2C2C; float: left; text-align: left; padding-top: 4px;">
ORDER DETAILS</p>
<a href="{order_details_url}" aria-pressed="true" class="actives anchor-tag"
style=" font-family: \'DM Sans\',sans-serif; font-style: normal; display:flex; font-weight: 700; float:right; font-size: 14px; line-height: 28px; color: #2C2C2C;">
Check Order</a>
</div>
<div style="clear: both;"></div>
<div style="margin:14px 20px;">
<table class="tables" id="customers" border="0" cellpadding="0" cellspacing="0"
width="100%" style="text-align: left;">
<tr style="align-items:left;">
<th style="padding-left: 18px;">Items</th>
<th>Seller</th>
<th style="padding-left:18px;">Qty</th>
<th>Price</th>
</tr>
<tr>
<td style="border-bottom: 1px solid #DFDFDF; width: 300px;">
<img style="width: 21px; height: 21px; padding: 10.5px; background-color: #F1F1F1; border-radius: 2px; margin-left: 18px; margin-top: 24px; margin-bottom: 24px;float:left"
src="{product_image}" alt="">
<div style="float:left; width: 220px; padding-bottom: 24px;">
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 500; font-size: 14px; margin-left: 12px; line-height: 20px; color: #2C2C2C; margin-top: 27px;">
{product_name}</p>
<p
style="font-family: \'Roboto\', sans-serif; font-style: normal;font-weight: 500; font-size: 11px;line-height: 13px; color: #898989; margin-left: 12px; margin-top: 4px;">
{attributes}</p>
</div>
<div style="clear: both;"></div>
</td>
<td
style="font-family:\'DM Sans\', sans-serif; border-bottom: 1px solid #DFDFDF;font-style: normal; font-weight: 500; font-size: 11px; width: 100px; padding-top: 5px; line-height: 16px; color: #2C2C2C;">
{vendor_name}</td>
<td
style="font-family:\'DM Sans\', sans-serif; border-bottom: 1px solid #DFDFDF; font-style: normal; padding-left: 24px; font-weight: 500; font-size: 14px; line-height: 18px; text-align: left;  margin-left: 10px; color: #2C2C2C; padding-top: 4px;">
{product_qty}</td>
<td
style=" font-family:\'DM Sans\', sans-serif;  border-bottom: 1px solid #DFDFDF; font-style: normal; margin-left: 10px;  padding-top: 4px; font-weight: 500;font-size: 14px;line-height: 18px;color: #2C2C2C;">
{currency_symbol}{product_price}</td>
</tr>
<tr>
<td></td>
<td
style="font-family:\'DM Sans\', sans-serif; border-bottom: 1px solid #DFDFDF; font-style: normal; font-weight: 500; font-size: 14px; line-height: 18px; color: #898989;">
<p style="margin: 1px; padding-top:24px;">Subtotal </p>
<p style="margin: 1px;padding:16px 0px;">Shipping </p>
</td>
<td style="border-bottom: 1px solid #DFDFDF;">
</td>
<td
style="font-family:\'DM Sans\', sans-serif;  border-bottom: 1px solid #DFDFDF; font-style: normal; font-weight: 500; font-size: 14px; line-height: 18px; color: #898989;">
<p style="margin: 0; padding-top:24px; margin-top:1px;">
{currency_symbol}{subtotal}</p>
<p style="margin: 0;padding:16px 0px; margin-top:1px;">
{currency_symbol}{shipping_charge}</p>
</td>
</tr>
<tr>
<td></td>
<td
style="font-family: \'DM Sans\', sans-serif; font-style: normal;font-weight:500; font-size: 14px;line-height: 18px; padding-top: 16px; color: #2C2C2C;">
Grand Total</td>
<td></td>
<td
style="font-family: \'DM Sans\', sans-serif; font-style:normal; font-weight:500; font-size: 14px;line-height: 18px; padding-top: 16px; color: #2C2C2C;">
{currency_symbol}{grand_total}</td>
</tr>
</table>
</div>

<div style="clear: both;"></div>
<div style="margin:14px 20px; {shipping_tracking_count}">
<p
style="font-family: \'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 18px; margin-top: 2px; line-height: 28px; color: #2C2C2C; float: left; text-align: left; padding-top: 4px;">
Tracking Information</p>
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%"
style="max-width: 640px; font-family: \'DM Sans\', sans-serif; font-weight: 500;" id="order-table">
  <thead>
    <tr>
      <th style="{shipping_item_name}">Item</th>
      <th style="{shipping_provider_name}">Provider</th>
      <th style="{shipping_tracking_number}">Tracking Number</th>
      <th style="{date_shipped}">Date</th>
      <th style="{shipping_tracking_url}">Tracking Url</th>
    </tr>
  </thead>
  <tbody>
            {shipping_tracks}
  </tbody>
</table>
</div>

<div style="margin:30px 20px; background-color: #F3F3F3; border-radius: 4px;">
<div>
<p
style="font-family: \'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 18px; line-height: 28px; padding: 20px 14px 11px 14px ; text-align: left; padding-left:14px; margin-right:14px;color: #2C2C2C; margin-top: 1px;">
CUSTOMER DETAILS</p>
<p
style="border-bottom: 1px solid #DFDFDF; margin-left:14px; margin-top:1px; margin-right:14px;">
</p>
</div>
<div style="display:flex;">
<div style="margin-right:50px">
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 16px; line-height: 28px; padding: 20px 14px 0px 14px ; text-align: left; padding-left:14px; margin-right:14px;color: #2C2C2C; margin-top: 1px;">
SHIPPING ADDRESS</p>
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 400; font-size: 14px; line-height: 24px;color: #2C2C2C; padding: 5px 0px 43px 14px; text-align: left; width: 200px; margin-top: 1px; width: 200px;">
{shipping_address}
</p>
</div>
<div style="padding-bottom: 24px; margin-left: 20px;">
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 16px; line-height: 28px; padding: 20px 14px 0px 14px ; text-align: left; padding-left:14px; margin-right:14px;color:#2C2C2C; margin-top: 1px;">
ESTIMATED DELIVERY TIME</p>
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 400; font-size: 14px; line-height: 24px; color: #2C2C2C; padding: 5px 0px 0px 14px; text-align: left; margin-top: 1px;">
{estimated_delivery_time} Office Days</p>
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 16px; line-height: 28px; padding: 26px 14px 0px 14px ; text-align: left; margin-right:14px;color: #2C2C2C; margin-top: 1px;">
PAYMENT</p>
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 400; font-size: 14px; line-height: 24px; color: #2C2C2C; padding: 5px 0px 0px 14px; text-align: left; margin-top: 1px;">
{payment_method}</p>
</div>
</div>
</div>
<div>
<p
style="font-family:\'DM Sans\', sans-serif; font-style: normal; font-weight: 700; font-size: 18px;line-height: 21px; margin-top:1px ;text-align:center; text-transform: uppercase; color: #2C2C2C;">
Keep in touch</p>
</div>
<div
style="margin-top: 1px; font-size: 14px; text-align: center; color: #898989; line-height: 22px; margin: 1px;">
<p style="margin-top:14px"> If you have any queries, concerns or suggestions,</p>
<p style="margin:0px; margin-top:1px"> please email us: <span
style="cursor: pointer; color: #0060A9; text-decoration: underline;">{support_mail}</span>
</p>
</div>
<p style="border-top: 1px solid #dfdfdf; margin: 1px 20px 0px 20px;"></p>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center" bgcolor="#e9ecef">
<table class="tables" border="0" cellpadding="0" cellspacing="0" width="100%"
style="max-width: 640px; font-family: \'DM Sans\', sans-serif; font-weight: 500; margin-bottom: 200px;">
<tr>
<td align="center" bgcolor="#ffffff">
<p
style="text-align: center; line-height: 16px; color: #898989; font-size: 12px; margin: 13px 0px;">
&copy 2022, {company_name}. All rights reserved.</p>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>

</html>',
                'language_id' => 1,
                'status' => 'Active',
                'variables' => 'logo,order_number,user_name,company_url,order_confirm_date,contact_number,order_details_url,product_image,product_name,attributes,vendor_name,vendor_name,currency_symbol,product_price,subtotal,shipping_charge,grand_total,shipping_address,estimated_delivery_time,payment_method,support_mail,company_name, shipping_item_name,shipping_provider_name,shipping_tracking_number,shipping_tracking_url,date_shipped,order_track_url',
            ]);
        }

    }
}
