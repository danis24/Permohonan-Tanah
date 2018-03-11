<title>Combobox</title>

<p></p>
    <table width="451" border="0" align="center">
      <tr>
        <td width="118">NIM</td>
        <td width="323"><select name="nim" id="nim" onchange="changeValue(this.value)" >
        <option value="">-Pilih-</option>
        <?php
       
    $jsArray = "var dtMhs = new Array();\n";       
    foreach ($mhs->result_array() as $row) {  
        echo '<option value="' . $row['nim'] . '">' . $row['nim'] . '</option>';   
        $jsArray .= "dtMhs['" . $row['nim'] . "'] = {nama:'" . addslashes($row['jurusan'])."'};\n";   
    }     
    ?>   
        </select></td>
      </tr>
      <tr>
        <td>Nama Mahasiswa</td>
        <td><textarea name="nm" id="nm" >  </textarea></td>
      </tr>
      
    </table>
      <script type="text/javascript">   
    <?php echo $jsArray; ?> 
    function changeValue(nim){ 
    document.getElementById('nm').value = dtMhs[nim].nama; 
     
    }; 
    </script> 