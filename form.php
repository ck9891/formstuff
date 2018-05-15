<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="crcform">
        <h1>Internship Details</h1>
        <form id="internship_details">
            <table class="table table-bordered" id="dynamic_field">
                <tr>
                    <td>
                        <!--div class="top-row"-->
                        <div class="field-wrap">
                            <label>
                                Company<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name="company[]"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Project<span class="req">*</span>
                            </label>
                            <input type="text"required autocomplete="off" name="project[]"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Duration<span class="req">*</span>
                            </label>
                            <input type="text"required autocomplete="off" name="duration[]"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Key Learning<span class="req">*</span>
                            </label>
                            <input type="text"required autocomplete="off" name="key_learning[]"/>
                        </div>
                    </td>
                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                </tr>
            </table>
            <input type="button" name="submit" id="submit"  class="btn btn-info" value="Submit" />
        </form>
    </div>
    <script>
        $(document).ready(function(){
            var i = 1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"><td><div class="field-wrap"><label>Company<span class="req">*</span></label><input type="text" required autocomplete="off" name="company[]"/></div><div class="field-wrap"><label>Project<span class="req">*</span></label><input type="text"required autocomplete="off" name="project[]"/></div><div class="field-wrap"><label>Duration<span class="req">*</span></label><input type="text"required autocomplete="off" name="duration[]"/></div><div class="field-wrap"><label>Key Learning<span class="req">*</span></label><input type="text"required autocomplete="off" name="key_learning[]"/></div></td></td><td><button name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click','.btn_remove', function(){
                var button_id = $(this).attr("id");
                $("#row"+button_id+"").remove();
            });

            $('#submit').click(function(){
                $.ajax({
                    async: true,
                    url: "internship_details.php",
                    method: "POST",
                    data: $('#internship_details').serialize(),
                    success:function(rt)
                    {
                        alert(rt);
                        $('#internship_details')[0].reset();
                    }
                });
            });
        });
    </script>
    