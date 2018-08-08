<html>
<head>
   
    <title>ARG</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
   <div class="container">
    <div class="row">
     <form> 
<label>Semester</label>
        <select class="sem" name="sem">
            <option value="1">SEM-1</option>
            <option value="2">SEM-2<option>
            <option value="3">SEM-3</option> 
            <option value="4">SEM-4</option> 
            <option value="5">SEM-5</option> 
            <option value="6">SEM-6</option> 
            <option value="7">SEM-7</option> 
            <option value="8">SEM-8</option> 
        </select><br>
        
        
        <select class="sem-1">
            <label>Sem-1</label>
            
                <option value="1">Sem-1 sub1 </option>
                <option value="2">Sem-1 sub2</option>
                <option value="3">Sem-1 sub3</option>
            </select>
            
            
            <select class="sem-2">
            <label>Sem-2</label>
            
                <option value="1">Sem-2 sub1 </option>
                <option value="2">Sem-2 sub2</option>
                <option value="3">Sem-2 sub3</option>
            </select>
           
            <select class="sem-3">
            <label>Sem-3</label>
            
                <option value="1">Sem-3 sub1 </option>
                <option value="2">Sem-3 sub2</option>
                <option value="3">Sem-3 sub3</option>
            </select>
        
            <select class="sem-4">
            <label>Sem-4</label>
            
                <option value="1">Sem-4 sub1 </option>
                <option value="2">Sem-4 sub2</option>
                <option value="3">Sem-4 sub3</option>
            </select>
            <select class="sem-5">
            <label>Sem-5</label>
            
                <option value="1">Sem-5 sub1 </option>
                <option value="2">Sem-5 sub2</option>
                <option value="3">Sem-5 sub3</option>
            </select>
            <select class="sem-6">
            <label>Sem-6</label>
            
                <option value="1">Sem-6 sub1 </option>
                <option value="2">Sem-6 sub2</option>
                <option value="3">Sem-6 sub3</option>
            </select>
            <select class="sem-7">
            <label>Sem-7</label>
            
                <option value="1">Sem-7 sub1 </option>
                <option value="2">Sem-7 sub2</option>
                <option value="3">Sem-8 sub3</option>
            </select>
            <select class="sem-8">
            <label>Sem-8</label>
            
                <option value="1">Sem-8 sub1 </option>
                <option value="2">Sem-8 sub2</option>
                <option value="3">Sem-8 sub3</option>
            </select>
    
           <!--<select class="sem-1">
            <label>Sem-1</label>
            
                <option value="1">Sem-1 sub1 </option>
                <option value="2">Sem-1 sub2</option>
                <option value="3">Sem-1 sub3</option>
            </select>
            <select class="co-2">
            <label>CO-2</label>
                
                <option value="1">sub1 co-2</option>
                <option value="2">sub2</option>
                <option value="3">sub3</option>
            </select>
            <select class="co-3">
            <label>CO-3</label>
            
                <option value="1">sub1 co-3</option>
                <option value="2">sub2</option>
                <option value="3">sub3</option>
            </select>
            
            <br>    
            
            <label for="sub">Select a subject <br>
                   <select name="sub" id="sub">
                    <option value="sub-1">sub-1</option>
                    <option value="sub-2">sub-2</option>
                    <option value="sub-3">sub-3</option>
                    <option value="sub-4">sub-4</option>
                    <option value="sub-5">sub-5</option>
                </select>
            </label>-->
            
            
    </form>
    
</div><!--row-->
</div><!--contianer-->



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
    
    
    $(".sem-1").hide();
    $(".sem-2").hide();
    $(".sem-3").hide();
    $(".sem-4").hide();
    $(".sem-5").hide();
    $(".sem-6").hide();
    $(".sem-7").hide();
    $(".sem-8").hide();
    
    $("select.sem").change(function(){
        var selectedSem = $(".sem option:selected").val();
        var co = parseInt(selectedSem);
          
                    
        for(i=1;i<=8;i++){
            if(i == co){
                $(".sem-"+co).show();
            }else{
                $(".sem-"+i).hide();
            }
            
        }
        
        
        
    });
});
    
 
 
</script>
</body>
</html>






