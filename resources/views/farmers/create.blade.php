@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-4">
            {{--<a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal"
               data-overlaySpeed="200" data-overlayColor="#36404a"><i class="mdi mdi-plus"></i> Add Farmer</a>--}}
            <h4>ADD FARMER</h4>
        </div><!-- end col -->
    </div>
    <!-- end row -->


    <div class="row" id="app">
        <div class="col-md-12">
            <div class="card-box">
                <h3 class="m-t-0 header-title">Bio data</h3>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Bank</label>
                    <div class="col-4">
                        <select id="inputState" class="form-control">
                            <option id="inputState" class="form-control">Choose</option>
                            <option id="inputState" class="form-control" value="Access Bank">Access Bank</option>
                        </select>
                    </div>
                    <label class="col-2 col-form-label">Account Number</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Enter Account Number" v-model="accNo" @click="accNoChange"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Title</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Mr/Chief">
                    </div>
                    <label class="col-2 col-form-label">Full Name</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Enter Full Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Email</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Enter Email">
                    </div>
                    <label class="col-2 col-form-label">Gender</label>
                    <div class="col-4">
                        <select id="inputState" class="form-control">
                            <option id="inputState" class="form-control">Choose</option>
                            <option id="inputState" class="form-control" value="male">Male</option>
                            <option id="inputState" class="form-control" value="female">Female</option>
                        </select>
                    </div>
                    <label class="col-2 col-form-label">Number of Dependents</label>
                    <div class="col-4">
                        <select class="custom-select mt-3">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="1">Four</option>
                            <option value="2">Five</option>
                            <option value="3">Six</option>
                        </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Address</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Mr/Chief">
                    </div>
                    <label class="col-2 col-form-label">Age</label>
                    <div class="col-4">
                        <select class="custom-select mt-3">
                            <option selected>Select</option>
                            <option value="1">20-30</option>
                            <option value="2">30-40</option>
                            <option value="3">40-50</option>
                            <option value="1">50-60</option>
                            <option value="2">60-70</option>
                            <option value="3">70-80</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">

                    <label class="col-2 col-form-label">Phone Number</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Enter Phone">
                    </div>
                    <label class="col-2 col-form-label">Language</label>
                    <div class="form-group col-md-4">
                        <select multiple class="form-control">
                            <option>English</option>
                            <option>Yoruba</option>
                            <option>Ibo</option>
                            <option>Hausa</option>
                            <option>Others</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="card-box">
                <h3 class="m-t-0 header-title">Farm data</h3>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Crops</label>
                    <div class="form-group col-md-4">
                        <select multiple class="form-control">
                            <option>Maize</option>
                            <option>Sorghum</option>
                            <option>Cassava</option>
                            <option>Rice</option>
                            <option>Tomato</option>
                        </select>
                    </div>
                    <label class="col-2 col-form-label">Number of Farms</label>
                    <div class="col-4">
                        <select class="custom-select mt-3">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="1">Four</option>
                            <option value="2">Five</option>
                            <option value="3">Six</option>
                        </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Farm Size</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Enter Farm Size">
                    </div>

                    <label class="col-2 col-form-label">Farm Association</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Member of association..">
                    </div>
                </div>
            </div>

            <div class="card-box">
                <h3 class="m-t-0 header-title">Guarantor data</h3>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Guarantor Name</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Enter Farm Size">
                    </div>
                    <label class="col-2 col-form-label">Guarantor ID</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Member of association..">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-2 col-form-label">Guarantor Farm Size</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Enter Farm Size">
                    </div>
                    <label class="col-2 col-form-label">Guarantor Credit Score</label>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Member of association..">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->


@endsection


@section('script')

   {{-- <script src="{{ asset(js/script.js) }}"></script>--}}
   <script type="application/javascript">
       //const axios = require('axios');

       var app = new Vue({
           el: '#app',
           data: {
               accNo : "00000010023"
           },
           methods: {
               accNoChange : function () {
                   axios({
                       method: 'POST',
                       url: 'https://appdev-accessbank.azure-api.net/agent/api/v1/Account/information?Audit.AppId=6186604c-861f-4fc2-8d0b-5249cc641151&Audit.MessageId=d49e35ab-b7ba-49b0-9aa4-083ac57f8822&Number=00000010023',
                       params : {
                           // Request parameters
                           "Audit.AppId": "6186604c-861f-4fc2-8d0b-5249cc641151",
                           "Audit.MessageId": "d49e35ab-b7ba-49b0-9aa4-083ac57f8822",
                           "Number": "00000010023"
                       },
                       headers: {'Ocp-Apim-Subscription-Key': 'd5bf6ad110e44118a3a4b51c01a2d5cb'}
                   })
                   .then(function (response) {
                       console.log(response);
                   })
                   .catch(function (error) {
                       console.log(error);
                   });
               }
           }
       })
   </script>
@endsection
