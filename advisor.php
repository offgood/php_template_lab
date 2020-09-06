<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>จัดการข้อมูลอาจารย์ที่ปรึกษา</title>

    <meta name="description" content="Common form elements and layouts" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <?php require_once('assets/basic_head.php'); ?>

</head>

<body class="no-skin">

    <div class="main-container" id="main-container">
        <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {}
        </script>

        <div class="main-content">
            <div class="main-content-inner">
                <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                    try {
                        ace.settings.check('breadcrumbs', 'fixed')
                    } catch (e) {}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="index.php">Home</a>
                        </li>

                        <li>
                            <a href="index.php?menu=2">จัดการข้อมูล</a>
                        </li>
                        <li class="active">อาจารย์ที่ปรึกษา</li>
                    </ul><!-- /.breadcrumb -->

                    <!-- #section:basics/content.searchbox -->
                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="nav-search-input"
                                    id="nav-search-input" autocomplete="off" />
                                <i class="ace-icon fa fa-search nav-search-icon"></i>
                            </span>
                        </form>
                    </div><!-- /.nav-search -->

                    <!-- /section:basics/content.searchbox -->
                </div>

                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">
                    <!-- #section:settings.box -->

                    <!-- /section:settings.box -->
                    <div class="page-header">
                        <h1>
                            จัดการข้อมูลอาจารย์ที่ปรึกษา
                        </h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <form action="process_data.php" method="post" class="form-horizontal" role="form">
                                <!-- #section:elements.form -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                        Advisor ID
                                    </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1" placeholder="รหัส อ.ที่ปรึกษา"
                                            name="advi_id" class="col-xs-10 col-sm-5" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                        Advisor Name
                                    </label>

                                    <div class="col-sm-9">
                                        <input type="text" id="form-field-1" placeholder="ชื่อ-สกุล ปรึกษา"
                                            name="advi_name" class="col-xs-10 col-sm-5" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">
                                        Email
                                    </label>

                                    <div class="col-sm-3">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            name="advi_email" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your
                                            email with anyone else.</small>
                                    </div>
                                    <div class="col-sm-6"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-mask-2">
                                        Phone
                                    </label>

                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="ace-icon fa fa-phone"></i>
                                            </span>

                                            <input class="form-control input-mask-phone" type="text" name="advi_phone"
                                                id="form-field-mask-1" placeholder="(999) 999-9999"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-mask-2">
                                        Password
                                    </label>

                                    <div class="col-sm-3">
                                        <input type="password" id="pwdId" class="form-control pwds" pattern="^[a-z]{2,4}$"
                                            required>
                                        <div class="valid-feedback">Valid</div>
                                        <div class="invalid-feedback">a to z only (2 to 4 long)</div>
                                    </div>
                                    <div class="col-sm-6"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-mask-2">
                                        Confirm Password
                                    </label>

                                    <div class="col-sm-3">
                                        <input type="password" id="cPwdId" class="form-control pwds" pattern="^[a-z]{2,4}$"
                                            required>
                                        <div id="cPwdValid" class="valid-feedback">Valid</div>
                                        <div id="cPwdInvalid" class="invalid-feedback">a to z only (2 to 4 long)</div>
                                    </div>
                                    <div class="col-sm-6"></div>
                                </div>

                                <?php
                                    require_once('connect.php');
                                    $strSQL ="SELECT * FROM t_faculty";

                                    $stmt = $conn->prepare($strSQL);
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();                                
                                ?>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right"
                                        for="form-field-1">Chosen</label>

                                    <div class="col-sm-3">
                                        <select class="chosen-select form-control" name="fac_id"
                                            id="form-field-select-3" data-placeholder="Choose Faculty ...">
                                            <?php foreach($result as $item){ ?>
                                            <option value="<?=$item['fac_id']?>"><?=$item['fac_name']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-3">

                                    </div>
                                </div>

                                <div class="clearfix form-actions">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-info" type="submit" name="submit" value="add_advi">
                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                            Submit
                                        </button>

                                        &nbsp; &nbsp; &nbsp;
                                        <button class="btn" type="reset">
                                            <i class="ace-icon fa fa-undo bigger-110"></i>
                                            Reset
                                        </button>
                                    </div>
                                </div>

                                <div class="hr hr-24"></div>


                                <div class="space-24"></div>

                                <hr />

                            </form>

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->


        <!-- footer -->
        <?php require_once('assets/footer.php'); ?>




    </div><!-- /.main-container -->

    <!-- basic scripts -->
    <script src="assets/js/jquery-ui.custom.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.js"></script>
    <script src="assets/js/chosen.jquery.js"></script>
    <script src="assets/js/fuelux/fuelux.spinner.js"></script>
    <script src="assets/js/date-time/bootstrap-datepicker.js"></script>
    <script src="assets/js/date-time/bootstrap-timepicker.js"></script>
    <script src="assets/js/date-time/moment.js"></script>
    <script src="assets/js/date-time/daterangepicker.js"></script>
    <script src="assets/js/date-time/bootstrap-datetimepicker.js"></script>
    <script src="assets/js/bootstrap-colorpicker.js"></script>
    <script src="assets/js/jquery.knob.js"></script>
    <script src="assets/js/jquery.autosize.js"></script>
    <script src="assets/js/jquery.inputlimiter.1.3.1.js"></script>
    <script src="assets/js/jquery.maskedinput.js"></script>
    <script src="assets/js/bootstrap-tag.js"></script>

    <!-- ace scripts -->
    <script src="assets/js/ace/elements.scroller.js"></script>
    <script src="assets/js/ace/elements.colorpicker.js"></script>
    <script src="assets/js/ace/elements.fileinput.js"></script>
    <script src="assets/js/ace/elements.typeahead.js"></script>
    <script src="assets/js/ace/elements.wysiwyg.js"></script>
    <script src="assets/js/ace/elements.spinner.js"></script>
    <script src="assets/js/ace/elements.treeview.js"></script>
    <script src="assets/js/ace/elements.wizard.js"></script>
    <script src="assets/js/ace/elements.aside.js"></script>
    <script src="assets/js/ace/ace.js"></script>
    <script src="assets/js/ace/ace.ajax-content.js"></script>
    <script src="assets/js/ace/ace.touch-drag.js"></script>
    <script src="assets/js/ace/ace.sidebar.js"></script>
    <script src="assets/js/ace/ace.sidebar-scroll-1.js"></script>
    <script src="assets/js/ace/ace.submenu-hover.js"></script>
    <script src="assets/js/ace/ace.widget-box.js"></script>
    <script src="assets/js/ace/ace.settings.js"></script>
    <script src="assets/js/ace/ace.settings-rtl.js"></script>
    <script src="assets/js/ace/ace.settings-skin.js"></script>
    <script src="assets/js/ace/ace.widget-on-reload.js"></script>
    <script src="assets/js/ace/ace.searchbox-autocomplete.js"></script>

    <script src="assets/scr.js"></script>

</body>

</html>