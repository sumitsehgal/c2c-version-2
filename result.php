<?php include('header.php'); ?>
<section>
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="col-md-12">
                <h3>Download Your Result</h3>
            </div>
            <?php if(isset($_GET["errorcode"]) && !empty($_GET["errorcode"])): ?>
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <?php echo "Record Not Found!"; ?>
                    </div>
                </div>

            <?php endif; ?>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">&nbsp;</div>
                    <div class="col-md-4">
                        <form action="download.php" method="post">
                            <div class="form-group">
                                <label>Enrolment Id</label>
                                <input type="number" class="form-control" name="enrolment_id" />
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="dob" />
                            </div>
                            <button type="submit" class="btn btn-primary"  > Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>