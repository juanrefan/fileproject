<html>
	<head>
        <title>apoteksenja</title>
        <meta charset="utf-8"></meta>
        <meta name="description" content="apotek"></meta>
        <meta name="author" content="kelompokapotek"></meta>
        <meta name='date'content='25 Mei 2020'></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="gambar/iconk.jpg" />
        <link rel="stylesheet"href="stylelist.css"></link>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="script.js" type="text/javascript"></script>
    </head>
    <header> 
        <div class="logo"><img src="gambar/logos.png" alt="logo" width="100" height="100"></div>
         <nav>
             <ul>
                <li><a href="index.html"id="back">Home</a></li>
                <li><a href="product.html">Product</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="loginto.html">Login</a></li>	
             </ul>
         </nav> 
<body>
    <center>
        <?php

        include_once 'dao/invoiceDAO.php';
        $invoicedao = new invoiceDAO();

        include_once 'PDOUtil.php';

        


         $submitpress = filter_input(INPUT_POST,'submt');
         if(isset($submitpress)){

            $nama= filter_input(INPUT_POST,'nama');
            $invoice= filter_input(INPUT_POST,'invoice');
            $jumlah= filter_input(INPUT_POST,'jumlah');
            $tgl= filter_input(INPUT_POST,'tgl');
            $total= filter_input(INPUT_POST,'total');
            $inserinvoice = new Invoice();
            $insertinvoice->setNama($nama);
            $insertinvoice->setInvoice($invoice);
            $insertinvoice->setTanggal($tgl);
            $insertinvoice->setTotal($total);
            $insertinvoice->setJumlah($jumlah);
            $result=$invoicedao->InsertInvoice($insertinvoice);
        
         }

       ?>
    
        <div class="C1">
            <form method="POST" action="insert_data_form.php">
                <div><h1>Form<h1></div>
                <div>
                    <label for="fname">Nama:</label><br>
                    <br>
                    <input type="text" id="fname" name="nama"><br>
                </div>
                <br>
                <div>
                    <label for="alm">No invoice:</label><br>
                    <br>
                    <input type="text" id="alm" name="invoice"><br>
                </div>
                    <label for="alm">Jumlah Produk:</label><br>
                    <br>
                    <input type="text" id="alm" name="jumlah"><br>
                <div>
                </div>
                <div>
                    <label for="tlp">tgl_transaksi:</label><br>
                    <input type="text" id="tlp" name="tgl"><br>
                </div>
                <div>
                    <label for="tlp">Total harga:</label><br>
                    <input type="text" id="tlp" name="total"><br>
                </div>
                <br>
                <div>
                    <button class = "btn" type="submit" value="Submit" name="submt">Submit</a></button>
                    <button class = "btn" type="reset" value="Reset">Reset</button>
                </div>


        <table style="border-spacing: 3px; border: 1px solid black">
        <tr>
          <th>invoce</th>
          <th>nama</th>
          <th>tanggal</th>
          <th>jumlah</th>
          <th>total</th>
        </tr>
        <br>
        <br>
        <?php
     
  
            $select = $invoicedao->SelectInvoice();

            foreach ($select as $row) {
                echo "<tr>";
                echo '<td>' . $row->getInvoice() . '</td>';
                echo '<td>' . $row->getNama() . '</td>';
                echo '<td>' . $row->getTanggal() . '</td>';
                echo '<td>' . $row->getJumlah() . '</td>';
                echo '<td>' . $row->getTotal() . '</td>';
                echo "</tr>";
      
        }
        $link=null;
  
  
  
  
  ?>
        </table>
</center>

<footer>
    <marquee><p>© Apotek Senja</p></marquee>
</footer>

</body>