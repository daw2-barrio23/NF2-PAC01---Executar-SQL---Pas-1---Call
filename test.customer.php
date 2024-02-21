<?php

        require("class.customer.php");

        $objCustomer1 = new Customer();
        $objCustomer1->setCustomerCode("1");
        $objCustomer1->setCustomerName("Nico");
        $objCustomer1->setCustomerCity("Badalona");
        $objCustomer1->setGrade("A");
        $objCustomer1->setOpeningAmt(1);
        $objCustomer1->setReceiveAmt(50);
        $objCustomer1->setPaymentAmt(2000);
        $objCustomer1->setOutstandingAmt(3000);
        $objCustomer1->setPhoneNo("651157885");
        $objCustomer1->setAgentCode("GTT007");
        
        $objCustomer2 = new Customer();
        $objCustomer2->setCustomerCode("2");
        $objCustomer2->setCustomerName("Fernando");
        $objCustomer2->setCustomerCity("Oviedo");
        $objCustomer2->setGrade("B");
        $objCustomer2->setOpeningAmt(14);
        $objCustomer2->setReceiveAmt(70);
        $objCustomer2->setPaymentAmt(3000);
        $objCustomer2->setOutstandingAmt(4000);
        $objCustomer2->setPhoneNo("633143333");
        $objCustomer2->setAgentCode("AM2024");
        
        echo "Datos del primer cliente:<br/>";
        echo "Código: " . $objCustomer1->getCustomerCode() . "<br/>";
        echo "Nombre: " . $objCustomer1->getCustomerName() . "<br/>";
        echo "Ciudad: " . $objCustomer1->getCustomerCity() . "<br/>";
        echo "Grado: " . $objCustomer1->getGrade() . "<br/>";
        echo "Monto de Apertura: " . $objCustomer1->getOpeningAmt() . "<br/>";
        echo "Monto Recibido: " . $objCustomer1->getReceiveAmt() . "<br/>";
        echo "Monto Pagado: " . $objCustomer1->getPaymentAmt() . "<br/>";
        echo "Monto Pendiente: " . $objCustomer1->getOutstandingAmt() . "<br/>";
        echo "Número de Teléfono: " . $objCustomer1->getPhoneNo() . "<br/>";
        echo "Código de Agente: " . $objCustomer1->getAgentCode() . "<br/><br/>";
        
        echo "Datos del segundo cliente:<br/>";
        echo "Código: " . $objCustomer2->getCustomerCode() . "<br/>";
        echo "Nombre: " . $objCustomer2->getCustomerName() . "<br/>";
        echo "Ciudad: " . $objCustomer2->getCustomerCity() . "<br/>";
        echo "Grado: " . $objCustomer2->getGrade() . "<br/>";
        echo "Monto de Apertura: " . $objCustomer2->getOpeningAmt() . "<br/>";
        echo "Monto Recibido: " . $objCustomer2->getReceiveAmt() . "<br/>";
        echo "Monto Pagado: " . $objCustomer2->getPaymentAmt() . "<br/>";
        echo "Monto Pendiente: " . $objCustomer2->getOutstandingAmt() . "<br/>";
        echo "Número de Teléfono: " . $objCustomer2->getPhoneNo() . "<br/>";
        echo "Código de Agente: " . $objCustomer2->getAgentCode() . "<br/><br/>";
        
        // Intercambio de valores
        $tempCustomerCode = $objCustomer1->getCustomerCode();
        $tempCustomerName = $objCustomer1->getCustomerName();
        $tempCustomerCity = $objCustomer1->getCustomerCity();
        $tempGrade = $objCustomer1->getGrade();
        $tempOpeningAmt = $objCustomer1->getOpeningAmt();
        $tempReceiveAmt = $objCustomer1->getReceiveAmt();
        $tempPaymentAmt = $objCustomer1->getPaymentAmt();
        $tempOutstandingAmt = $objCustomer1->getOutstandingAmt();
        $tempPhoneNo = $objCustomer1->getPhoneNo();
        $tempAgentCode = $objCustomer1->getAgentCode();
        
        $objCustomer1->setCustomerCode($objCustomer2->getCustomerCode());
        $objCustomer1->setCustomerName($objCustomer2->getCustomerName());
        $objCustomer1->setCustomerCity($objCustomer2->getCustomerCity());
        $objCustomer1->setGrade($objCustomer2->getGrade());
        $objCustomer1->setOpeningAmt($objCustomer2->getOpeningAmt());
        $objCustomer1->setReceiveAmt($objCustomer2->getReceiveAmt());
        $objCustomer1->setPaymentAmt($objCustomer2->getPaymentAmt());
        $objCustomer1->setOutstandingAmt($objCustomer2->getOutstandingAmt());
        $objCustomer1->setPhoneNo($objCustomer2->getPhoneNo());
        $objCustomer1->setAgentCode($objCustomer2->getAgentCode());
        
        $objCustomer2->setCustomerCode($tempCustomerCode);
        $objCustomer2->setCustomerName($tempCustomerName);
        $objCustomer2->setCustomerCity($tempCustomerCity);
        $objCustomer2->setGrade($tempGrade);
        $objCustomer2->setOpeningAmt($tempOpeningAmt);
        $objCustomer2->setReceiveAmt($tempReceiveAmt);
        $objCustomer2->setPaymentAmt($tempPaymentAmt);
        $objCustomer2->setOutstandingAmt($tempOutstandingAmt);
        $objCustomer2->setPhoneNo($tempPhoneNo);
        $objCustomer2->setAgentCode($tempAgentCode);
        
        echo "Después de intercambio de valores:<br/>";
        echo "Datos del primer cliente:<br/>";
        echo "Código: " . $objCustomer1->getCustomerCode() . "<br/>";
        echo "Nombre: " . $objCustomer1->getCustomerName() . "<br/>";
        echo "Ciudad: " . $objCustomer1->getCustomerCity() . "<br/>";
        echo "Grado: " . $objCustomer1->getGrade() . "<br/>";
        echo "Monto de Apertura: " . $objCustomer1->getOpeningAmt() . "<br/>";
        echo "Monto Recibido: " . $objCustomer1->getReceiveAmt() . "<br/>";
        echo "Monto Pagado: " . $objCustomer1->getPaymentAmt() . "<br/>";
        echo "Monto Pendiente: " . $objCustomer1->getOutstandingAmt() . "<br/>";
        echo "Número de Teléfono: " . $objCustomer1->getPhoneNo() . "<br/>";
        echo "Código de Agente: " . $objCustomer1->getAgentCode() . "<br/><br/>";
        
        echo "Datos del segundo cliente después del intercambio:<br/>";
        echo "Código: " . $objCustomer2->getCustomerCode() . "<br/>";
        echo "Nombre: " . $objCustomer2->getCustomerName() . "<br/>";
        echo "Ciudad: " . $objCustomer2->getCustomerCity() . "<br/>";
        echo "Grado: " . $objCustomer2->getGrade() . "<br/>";
        echo "Monto de Apertura: " . $objCustomer2->getOpeningAmt() . "<br/>";
        echo "Monto Recibido: " . $objCustomer2->getReceiveAmt() . "<br/>";
        echo "Monto Pagado: " . $objCustomer2->getPaymentAmt() . "<br/>";
        echo "Monto Pendiente: " . $objCustomer2->getOutstandingAmt() . "<br/>";
        echo "Número de Teléfono: " . $objCustomer2->getPhoneNo() . "<br/>";
        echo "Código de Agente: " . $objCustomer2->getAgentCode() . "<br/><br/>";

?>