<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
<div class="container-2">
    <div class="row">
      <div class="col-75">
        <input type="text" id="projectname" name="projectname" placeholder="Project Title" class="projectname">
      </div>
    </div>


      <div class="row">
      <div class="pages">
          
           <label for="deadline">Pages</label>
         <div class="cost">10$ each</div>
        <div class="amount"><input type="number" value="1" class="form-page" id="pages" name="pages" min="1"></div>
        <div class="total">10$</div> <br>
      </div>
      </div>

      <div class="row">
      <div class="deadline">
        <label for="deadline">Deadline</label><br>
        <input type="datetime-local" class="form-check-input" id="deadline" name="deadline" min="today">
      </div>
    </div>
   
    <div class="row">
      <div class="country">
        <label for="subject"></label>
      </div>
      <div class="col-75">
        <textarea id="instructions" name="instructions" placeholder="Write your instructions"  class="test" style="height:80px"></textarea>
      </div>
    </div>

<div class="row">
<div class="file">
       <label for="deadline" class="label">Upload File</label><br>
        <input type="file" id="myFile" name="file" class="label" multiple>
      </div>
    </div>
    <div class="row">
<div class="email">
<input type="email" id="customeremail" name="customeremail" class="label" placeholder="Your email">
      </div>
    </div>
<div class="row pay">
<?php include 'payment.php';?>
    </div>
</div>
<script>
    $('.amount > input[type="number"]').on('input', updateTotal);

    function updateTotal(e){
        var amount = parseInt(e.target.value);

        if (!amount || amount < 0)
            return;

        var $parentRow = $(e.target).parent().parent();
        var cost = parseFloat($parentRow.find('.cost').text());
        var total = (cost * amount).toFixed(2);

        $parentRow.find('.total').text(total);
    }
</script>

<script language="javascript">
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    $('#deadline').attr('min',today);
</script>
