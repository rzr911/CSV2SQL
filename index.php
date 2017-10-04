  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<script src=" https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
 
<div class="container">

<div class="row">
<h2 align="center">Convert CSV to SQL/Filter CSV/View CSV records </h2>
    <form class="col s12" action="csv2html.php" method="POST" enctype="multipart/form-data">
	<h3>Choose Option</h3>
       <p>
      <input name="12formfile" type="radio" onclick="fun1(this)" id="url" />
      <label for="url">URL</label>
    </p>
    <p>
      <input name="12formfile" type="radio" onclick="fun1(this)" id="file" />
      <label for="file">File Upload</label>
    </p>
	  <div class="row">
	  
        <div class="input-field col s12">
          <input placeholder="Enter URL" id="urlinput" name="urlinput" type="text" class="validate" disabled>
         
        </div>
      
      </div>
	  
	  <div class="row">
	  
        <div class="input-field col s12">
          <input placeholder="Enter Table name of SQL Insert statement" id="tinput" name="tableinputname" type="text" class="validate" >
          <label for="tinput">If table name is empty, random table name will be generated</label>
        </div>
      
      </div>
	  
	  <div class="row">
	  
       <input type="file" name="fileinput" id="fileinput"  value="File Upload" disabled>
      
      </div>
      
       <div class="row">
	  
       <input type="submit" name="12formsubmit" id="submit"  value="Submit" disabled>
      
      </div>
    </form>
  </div>
          </div>
        <script> function fun1(t)
		{
			document.getElementById("urlinput").disabled=true;
			document.getElementById("fileinput").disabled=true;
			
			document.getElementById("submit").disabled=false;
			document.getElementById(t.id+"input").disabled=false;
		}
		</script>