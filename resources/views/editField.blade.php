<!DOCTYPE html>
<html>
<head>
<title>Add Field</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
  integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  
  <link rel="stylesheet" href="/css/addFile.css"/>
  <script src="/js/addFile.js"></script> 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
  crossorigin="anonymous"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" 
  integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" 
  crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
  integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" 
  crossorigin="anonymous"></script>

  
  
  
</head>
<body>
<form method="POST" action="/addfield"name="addfield" id="thenewfield" >
<div>
    <button type="submit" class="btn btn-success" style="float:right" onclick="Add(); return false;">Add</button>
    </div>
  <fieldset id="fieldset">
     <legend>Details</legend>
     <div class="form-group" id="placeholder" >
        <div id="input">
           <label for="fname">FirstName:</label>
              <input type="text" class="form-control" name="field[]" id="fname"/>
           <label for="lname">LastName:</label>  
              <input type="text" class="form-control" name="field[]" id="lname" />
           <label for="age">Age:</label>   
              <input type="text" class="form-control" name="field[]" id="age" />
           <label for="10thpercent">10th Percentage:</label>  
              <input type="text" class="form-control" name="field[]" id="10thpercent" />
           <label for="12thpercent">12th Percentage:</label>  
              <input type="text" class="form-control" name="field[]" id="12thpercent" />
           <label for="highest_qualification">10th Percentage:</label>  
              <input type="text" class="form-control" name="field[]" id="highest_qualification" />
              </br>
              <button type="submit" class="btn btn-danger" style="float:right">Submit</button></br></br>
          </div>
       </div>
  </fieldset>
</form>
</body>
</html>
