@extends('layouts.ThemeSource.sidebar')
@section('content')
    <!-- Page Content -->
    <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="#">KYC</a>
                </li>
                <li>
                    <a href="#">KYC </a>
                </li>
                <li class="active">KYC</li>
            </ul>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
            <div class="header-title">
                <h1>

                    <small>
                        <i class="fa fa-angle-right"></i>

                    </small>
                </h1>
            </div>
            <!--Header Buttons-->
            <div class="header-buttons">
                <a class="sidebar-toggler" href="#">
                    <i class="fa fa-arrows-h"></i>
                </a>

                <a class="fullscreen" id="fullscreen-toggler" href="#">
                    <i class="glyphicon glyphicon-fullscreen"></i>
                </a>
            </div>
            <!--Header Buttons End-->
        </div>


        <div class="page-body">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">


                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <div class="widget flat radius-bordered">
                                        <div class="widget-header bg-blue">
                                            <span class="widget-caption">KYC Form</span>
                                        </div>
                                        <div class="widget-body">
                                            <div id="registration-form">
                                                <form role="form">





                                                    <div class="form-title">
                                                        Personal Information
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text"  name="First_Name" class="form-control" placeholder="First_Name">
                                                                            <i class="fa fa-user"></i>
                                                                        </span>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                            <input type="text"  name="Middle_Name_Initials" class="form-control" placeholder="Middle_Name_Initials">
                                                                            <i class="fa fa-user"></i>
                                                                </span>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Full_Mother_Name"	 class="form-control" placeholder="Full_Mother_Name">
                                                                            <i class="fa fa-user"></i>
                                                                        </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Family_Name" class="form-control" placeholder="Family_Name">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Marital_Status" class="form-control" placeholder="Marital_Status">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Spouse_name" class="form-control" placeholder="Spouse_name">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>



                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="gender_id" class="form-control" placeholder="gender_id">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>








                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Passport_No" class="form-control" placeholder="Passport_No">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="pass_Authority_of_Issue" class="form-control" placeholder="pass_Authority_of_Issue">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>



                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <label>P_Date_of_issue</label>
                                                                            <input type="date" name="P_Date_of_issue" class="form-control" placeholder="P_Date_of_issue">


                                                                        </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                                 <label>P_Expiry_Date</label>
                                                                            <input type="date" name="P_Expiry_Date" class="form-control" placeholder="P_Expiry_Date">

                                                                        </span>
                                                            </div>
                                                        </div>







                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="ID_NO" class="form-control" placeholder="ID_NO">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="ID_Authority_of_Issue" class="form-control" placeholder="ID_Authority_of_Issue">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                                 <label>ID_Date_of_issue</label>
                                                                            <input type="date" name="P_Expiry_Date" class="form-control" placeholder="P_Expiry_Date">

                                                                        </span>
                                                            </div>
                                                        </div>










                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="National_ID_Card_NO" class="form-control" placeholder="National_ID_Card_NO">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="National_ID_Authority_of_Issue" class="form-control" placeholder="National_ID_Authority_of_Issue">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>




                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                                 <label>National_ID_Date_of_issue</label>
                                                                            <input type="date" name="National_ID_Date_of_issue" class="form-control" placeholder="National_ID_Date_of_issue">

                                                                        </span>
                                                            </div>
                                                        </div>











                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Nationality_Certificate_no" class="form-control" placeholder="Nationality_Certificate_no">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Nationality_Certificate_Authority_of_Issue" class="form-control" placeholder="Nationality_Certificate_Authority_of_Issue">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>




                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                                 <label>Nationality_Certificate_Date_of_issue</label>
                                                                            <input type="date" name="Nationality_Certificate_Date_of_issue" class="form-control" placeholder="Nationality_Certificate_Date_of_issue">

                                                                        </span>
                                                            </div>
                                                        </div>





                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                                 <label>Date_Of_Birth</label>
                                                                            <input type="date" name="Date_Of_Birth" class="form-control" placeholder="Date_Of_Birth">

                                                                        </span>
                                                            </div>
                                                        </div>





                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Place_of_Birth" class="form-control" placeholder="Place_of_Birth">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>



                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Nationality" class="form-control" placeholder="Nationality">
                                                                            <i class="fa fa-user"></i>

                                                                        </span>
                                                            </div>
                                                        </div>

















                                                    </div>
                                                    <hr class="wide"/>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" placeholder="Birth Date">
                                                                            <i class="fa fa-calendar"></i>
                                                           </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                    <input type="text" class="form-control" placeholder="Birth Place">
                                                                    <i class="fa fa-globe"></i>
                                                                </span>
                                                            </div>
                                                        </div>

                                                    </div>




                                                    <div class="form-title">
                                                        ACCOUNT TYPE  Information
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control account_type_id" name="account_type_id">

                                                                </select>
                                                            </div>

                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control Credit_type_id" name="Credit_type_id">

                                                                </select>
                                                            </div>

                                                        </div>



                                                    </div>
                                                    <div class="row">



                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control Currency_id" name="Currency_id">

                                                                </select>
                                                            </div>

                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control Legal_Status_id" name="Legal_Status_id">

                                                                </select>
                                                            </div>

                                                        </div>




                                                    </div>
                                                    <hr class="wide"/>
                                                    <div class="row">



                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control personal_details_id" name="personal_details_id">

                                                                </select>
                                                            </div>

                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control Source_of_income_id" name="Source_of_income_id">

                                                                </select>
                                                            </div>

                                                        </div>



                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control Other_Sources_of_Income" name="Other_Sources_of_Income"
                                                                placeholder="Other_Sources_of_Income">
                                                            </div>

                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control Total_Monthly_Income_id" name="Total_Monthly_Income_id">

                                                                </select>
                                                            </div>

                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                    <input type="text" class="form-control" placeholder="Monthly_estimate">
                                                                    <i class="fa fa-globe"></i>
                                                                </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                    <input type="text" class="form-control" placeholder="Yearly_estimate">
                                                                    <i class="fa fa-globe"></i>
                                                                </span>
                                                            </div>
                                                        </div>







                                                    </div>






                                                    <div class="form-title">
                                                        Document Information
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" placeholder="Name">
                                                                            <i class="fa fa-user"></i>
                                                                        </span>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" placeholder="Family">
                                                                            <i class="fa fa-user"></i>
                                                                </span>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" placeholder="Phone">
                                                                            <i class="glyphicon glyphicon-earphone"></i>
                                                                        </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" class="form-control" placeholder="Mobile">
                                                                            <i class="glyphicon glyphicon-phone"></i>

                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="wide"/>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                            <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy" placeholder="Birth Date">
                                                                            <i class="fa fa-calendar"></i>
                                                           </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                    <input type="text" class="form-control" placeholder="Birth Place">
                                                                    <i class="fa fa-globe"></i>
                                                                </span>
                                                            </div>
                                                        </div>

                                                    </div>








                                                    <hr class="wide"/>



                                                    <div class="form-title">
                                                        job Information
                                                    </div>
                                                    <div class="row">


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Job_Title" class="form-control" placeholder="Job_Title">
                                                                            <i class="fa fa-wordpress"></i>
                                                                        </span>
                                                            </div>
                                                        </div>



                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Company_Owner_Name	" class="form-control" placeholder="Company_Owner_Name">
                                                                            <i class="fa fa-wordpress"></i>
                                                                        </span>
                                                            </div>
                                                        </div>




                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Employer_Nationality" class="form-control" placeholder="Employer_Nationality">
                                                                            <i class="fa fa-wordpress"></i>
                                                                        </span>
                                                            </div>
                                                        </div>



                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Employer_activities" class="form-control" placeholder="Employer_activities">
                                                                            <i class="fa fa-wordpress"></i>
                                                                        </span>
                                                            </div>
                                                        </div>




                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Employer_Address" class="form-control" placeholder="Employer_Address">
                                                                            <i class="fa fa-wordpress"></i>
                                                                        </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Residential_Address" class="form-control" placeholder="Residential_Address">
                                                                            <i class="fa fa-wordpress"></i>
                                                                        </span>
                                                            </div>
                                                        </div>



                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                        <span class="input-icon icon-right">
                                                                            <input type="text" name="Nearest_Land_Mark" class="form-control" placeholder="Nearest_Land_Mark">
                                                                            <i class="fa fa-wordpress"></i>
                                                                        </span>
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control Residence_Type_id" name="Residence_Type_id">

                                                                </select>
                                                            </div>

                                                        </div>














                                                    </div>



                                                    <button type="submit" class="btn btn-blue">Register</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Body -->


    </div>







    </div>




@endsection
@extends('layouts.ThemeSource.footer')

@section('js')
    <script>
        $(document).ready(function () {

        $('.account_type_id').select2({
            placeholder: 'نوع الحاسب'
        });

            $('.Credit_type_id').select2({
                placeholder: 'نوع البطاقه'
            });



            $('.Currency_id').select2({
                placeholder: 'نوع العمله'
            });
 //personal_details_id

            $('.Legal_Status_id').select2({
                placeholder: 'الوضع القانوني '
            });

            $('.personal_details_id').select2({
                placeholder: 'المعلومات الشخصية'
            });


            $('.Source_of_income_id').select2({
                placeholder: 'مصدر المال'
            });


            $('.Total_Monthly_Income_id').select2({
                placeholder: 'الدخل الشهري'
            });


           // Credit_type_id


            $('.Residence_Type_id').select2({
                placeholder: 'نوع السكن'
            });


        });

    </script>
@endsection
