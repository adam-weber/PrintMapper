<?php include("../admin_files/header.php"); ?>
<body>
  <div class="wrapper">
    <div class="main-content">
      <div class="left-content">
        <h1 id="title">Files</h1>
        <p id="para">The following two files are need for PrintMapper web install to work.</p>
        <ul class="file-list">
          <li>
            <h2>addPrinter.reg</h2>
            <h4 class="details">Details</h4>
            <section class="section-hidden">
              addPrinter.reg is a registry file that adds a custom protocol handler (add-printer) to the registry. Although it
              is not recommended, the protocol handler can be changed in settings.
            </section>
            <br>
            <a href="../files/download.php?file=addPrinter.reg" class="btn btn-download">Download</a>
          </li>
          <li>
            <h2>addPrinter.exe</h2>
                          <a href="addPrinter://EngineeringCanonIR">CCI</a>
            <h4 class="details">Details</h4>
            <section class="section-hidden">
              addPrinter.exe should be installed at "C:\PrintMapper\addPrinter.exe". This location can be changed in 
              settings. The executable is tiny, at 4kB and needs to be deployed with addPrinter.reg
              to every end user machine that intends to use web-install functionality.
              <br><br>
              <h4>Example</h4>
              <pre>

  Add Printer
  addPrinter.exe "\\print\OfficePrinter"
              </pre>
            </section>
            <br>
            <a href="../src/addPrinter.reg" class="btn btn-download">Download</a>
          </li>
        </ul>
      </div>
      <div class="right-content">
        <h1 id="title" class="right-pad" >Settings</h1>
          <p id="para" class="right-pad" >PrintMapper Settings</p>
        <div class="section-wrapper">
          <form class="mapper-settings">
            <br>
            <label for="Protocol Handler">Protocol Handler</label>
            <input class="files-input" name="Protocol Handler" value="print-install">
            <br>
            <label for="EXE Location">EXE Location</label>
            <input class="files-input" name="EXE Location" value="C:\print">
            <div id="buttons">
              <a href="#" class="btn btn-cancel">Cancel</a>
              <a href="#" class="btn btn-update" type="submit">Update Files</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="../admin_files/js/jquery-2.0.2.min.js"></script>
<script src="../admin_files/js/custom_files.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>

<?php 

$user = array("name" => "dubayou", 
              "age" => 20,
              "websites" => array("dubayou.com","willwharton.com","codecream.com"),
              "and_one" => "more");

$dir = "../settings/";
file_put_contents($dir.$user['name'],serialize($user));

function &get_user($name){
    return unserialize(file_get_contents("../userdata/".$name));
}



?>