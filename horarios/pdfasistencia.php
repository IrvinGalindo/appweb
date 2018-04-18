<?php
    include 'librerias/class.ezpdf.php';
    include 'librerias/fpdf/fpdf.php';       
   
    class PDF extends FPDF
    {

        // Load data
        function LoadData(){
             $fecha=$_REQUEST["fecha"];
            //obtiene conjunto de registros
            $conexionBD = mysqli_connect("localhost", "scheduletown", "contra123", "itsdb")
                or die('No pudo conectarse al servidor de Base de Datos MySql: ' . mysqli_error());
                //identificar la accion del usuario para conocer el tipo de query a usar en la actualizacion    
            $qry    = "SELECT E.idempleado, hora, asistio from empleado E,asistencia A where E.idempleado=A.idempleado && dia='".$fecha."' order by idempleado";         
            $result     =  mysqli_query($conexionBD,$qry);

            while ($registro = mysqli_fetch_array($result)) {
                $data[] = array($registro['idempleado'],$registro['hora'],$registro['asistio']);                 
                }             
            return $data;                        
        }

        function Header(){           
            // Logos
            //image(file,x.y,w,h)
            $this->Image('fondo.jpg',0 ,0,215,300); 
            //SetFont(family,style,size)                                  
            $this->SetFont('Arial','B',12);                        
            
            // Titulo
            //Cell(X width, Y width, text, border, current position, align,fill,link)
            $this->Cell(0,60,"REPORTE DE ASISTENCIA DEL DIA ".$_REQUEST["fecha"]."",0,0,'C');            
            
            
        }

        function Footer(){            
            // Position at 1.5 cm from bottom
            //SetY move to current abscissa
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','',6);
            // Page number            
            $this->Cell(0,6,'Pagina '.$this->PageNo()."/{nb}",0,0,'C');            
        }
                
        function FancyTable1($header, $data){    
            //cuerpo del reporte
            //define absissa (x) and ordinate (y)
            $this->SetXY(30,50);
            $this->SetFont('Arial','B',10);
                                                           
            
            // Header
            $this->SetFillColor(230,230,230);
            $w = array(30,30,80);
            for($i=0;$i<count($header);$i++)
                    $this->Cell($w[$i],6,$header[$i],1,0,'C',true);
            $this->Ln();           
            // Color and font restoration
            //setFillColor(fill collor operation)
            
            //SetTextColor define color text
            $this->SetTextColor(0);
            $this->SetFont('');
            $fill = false;             
            
            $noLinea    = 1;            
            $c          = 1;
            //data
            $this->SetXY(30,56);

            foreach($data as $row)
            {                   
                $this->Cell($w[0],4,$row[0],1,0,'C',false);
                $this->Cell($w[1],4,$row[1],1,0,'C',false);
                if($row[2]==1){
                $this->Cell($w[2],4,'Asistio',1,0,'C',false);    
            }else{
                $this->Cell($w[2],4,'No Asistio',1,0,'C',false);  
            }
                $this->Ln(4);
                $this->SetX(30);
                
                $fill = !$fill;                
                
                    if ($c>=37){                        
                        $this->setAutoPagebreak(true,'40'); 
                        $this->Cell(array_sum($w),0,'','T');
                        
                        // Header
                        $this->SetXY(50,50);
                        $w = array(10, 80);
                        for($i=0;$i<count($header);$i++)
                            $this->Cell($w[$i],6,$header[$i],1,0,'C',true);
                        $this->Ln();
                        $c = 1;
                    }
            }   
        }
    }


    $pdf = new PDF(); 
    $pdf->SetTitle('Reporte de asistencia');
        // Column headings
    $header  = array('Id empleado','Hora clase','Asistencia');            

    // Data loading 
    $data = $pdf->LoadData();
    $pdf->SetFont('Arial','',8);
    $pdf->AddPage();    
    $pdf->AliasNbPages();     
    $pdf->FancyTable1($header,$data);
    $pdf->SetAutoPageBreak(true,20);
    $pdf->Output();    