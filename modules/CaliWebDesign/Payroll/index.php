<?php

    // Cali Web Design Payroll Module
    // Version: 1.2.5
    // (C) Copyright Cali Web Design Services LLC - All rights reserved
    // DISMANTLING, REVERSE ENGINEERING, OR MODIFICATION OF THIS MODULE IS PROHIBITED.

    // This module is not included in the Cali Panel software by default
    // the Cali Web Design Payroll Module will allow you to run payroll on
    // certain time schedules, record and track employee work time and
    // run payments (with an integrated bank module), and records and keep track of
    // 1099s and W-2 Forms.

    // THIS MODULE WILL NOT SUBMIT THE FORMS TO THE IRS NOR SUBMIT ANY EARNINGS TO THE IRS.
    // YOU ARE FULLY RESPONSIBLE, THIS JUST ALLOWS AUTOMATING OF ACH PAYMENTS AND TIME KEEPING.

    $pagetitle = "Payroll";
    $pagesubtitle = "Initalizing";
    $pagetype = "Administration";

    include($_SERVER["DOCUMENT_ROOT"].'/modules/CaliWebDesign/Utility/Backend/Dashboard/Headers/index.php');

    echo '<title>'.$pagetitle.' | '.$pagesubtitle.'</title>';

    switch ($currentAccount->accessLevel->name) {
        case "Executive":
            header("location:/modules/CaliWebDesign/Payroll/ceoSuite");
            break;
        case "Manager":
            break;
        default:
            header("location:/modules/CaliWebDesign/Payroll/employeeView");
            break;
    }


?>