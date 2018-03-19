@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="{{ asset('css/mainboot.css') }}">

@section('content')
<div class="container-fluid">
    <div class="row">
                    <div class="col-md-6">
                    <fieldset style="height: auto;">
                            <legend>Complaint Details</legend>
                            <form class="form-horizontal" action="#">
                                <div class="form-group row">
                                        <label class="col-md-6 control-label">Complaint Sources:</label>
                                        <div class="col-md-6">
                                                <select class="form-control" id="sel1">
                                                        <option selected="selected" value="0">--Select--</option>
                                                        <option value="1">182 (RPF)</option>
                                                        <option value="2">By Post/Dak</option>
                                                        <option value="3">Clean My Coach</option>
                                                        <option value="4">Commercial Control</option>
                                                        <option value="5">Complaint Book at Station</option>
                                                        <option value="6">Complaint Book in Train</option>
                                                        <option value="7">CP-GRAMS</option>
                                                        <option value="8">Daily Position/Commercial Control</option>
                                                        <option value="9">E-Mail</option>
                                                        <option value="10">Facebook</option>
                                                        <option value="11">General Helpline 138</option>
                                                        <option value="12">Helpline 138</option>
                                                        <option value="17">Messages from Officer (Board Members)</option>
                                                        <option value="16">Messages from Officer (CRB)</option>
                                                        <option value="18">Messages from Officer (GM)</option>
                                                        <option value="20">Messages from Officer (HQ)</option>
                                                        <option value="21">Messages from Officer (Others)</option>
                                                        <option value="19">Messages from Officer (PHOD)</option>
                                                        <option value="14">railway board</option>
                                                        <option value="24">Security Helpline 182</option>
                                                        <option value="5">SMS</option>
                                                        <option value="9">TS Complaint Book (Express/Mail)</option>
                                                        <option value="8">TS Complaint Book (Rajdhani/Shatabdi)</option>
                                                        <option value="1">Twitter</option>
                                                        <option value="4">Web Portal (COMS)</option>
                                                </select>
                                        </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-md-6 control-label" for="pnr">PNR/Unreserved Tickets No:</label>
                                  <div class="col-md-6">          
                                    <input type="text" class="form-control" id="pnr" placeholder="PNR/Unreserved Tickets No.">
                                  </div>
                                </div>
                                <div class="form-group row">
                                            <label class="col-md-2 control-label" for="pnr">Type:</label>
                                            <div class="col-md-3">          
                                                    <select class="form-control" id="sel1">
                                                            <option>Train</option>
                                                            <option>Station</option>
                                                    </select>
                                            </div>
                                            <label class="col-md-3 control-label" for="pnr">Incident Date:</label>
                                            <div class="col-md-4">          
                                            <input type="date" class="form-control" id="pnr" placeholder="Date">
                                            </div>
                                   
                                     
                                </div>
                                <div class="form-group row">
                                        <label class="col-md-2 control-label" for="pnr">Name:</label>
                                        <div class="col-md-4">          
                                                <input type="text" class="form-control" id="pnr" placeholder="Name">
                                        </div>
                                        <label class="col-md-2 control-label" style="padding-left:0px;" for="pnr">Contact No:</label>
                                        <div class="col-md-4">          
                                        <input type="number" class="form-control" id="pnr" placeholder="Contact No">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-md-4 control-label" for="pnr">Existing Complaint No:</label>
                                        <div class="col-md-3">          
                                                <input type="text" class="form-control" id="pnr" placeholder="Complaint No">
                                        </div>
                                        <label class="col-md-2 control-label" for="pnr">File No:</label>
                                        <div class="col-md-3">          
                                        <input type="number" class="form-control" id="pnr" placeholder="File No">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-md-6 control-label" for="email">Email ID:</label>
                                        <div class="col-md-6">          
                                          <input type="email" class="form-control" id="email" placeholder="Email ID">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-md-6 control-label" for="email">Id Proof (DL/Adhar/VoterId/Pan):</label>
                                        <div class="col-md-6">          
                                          <input type="email" class="form-control" id="email" placeholder="Id Proof (DL/Adhar/VoterId/Pan)">
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-md-4 control-label" for="uploadfile">Add Document:</label>
                                        <div class="col-md-4">          
                                                <input type="file" name="uploadfile" id="uploadfile" style="margin-top: 4px;">
                                                
                                        </div>
                                        <div class="col-md-4" style="margin-top: 4px;">          
                                                <button type="submit" class="btn btn-sm btn-primary">Upload Files</button>
                                        </div>
                                </div>
                              </form>
                    </fieldset>
                    </div>
                    <div class="col-md-6">
                            <fieldset style="height: auto;">
                                    <legend>Train Details</legend>
                                    <form class="form-horizontal" action="#">
                                            <div class="form-group row">
                                                    <label class="col-md-6 control-label">Complaint Sources:</label>
                                                    <div class="col-md-6">
                                                      <input class="form-control" type="text" placeholder="Complaint Sources">
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                              <label class="col-md-6 control-label" for="pnr">PNR/Unreserved Tickets No:</label>
                                              <div class="col-md-6">          
                                                <input type="text" class="form-control" id="pnr" placeholder="PNR/Unreserved Tickets No.">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                                        <label class="col-md-2 control-label" for="pnr">Type:</label>
                                                        <div class="col-md-3">          
                                                                <select class="form-control" id="sel1">
                                                                        <option>Train</option>
                                                                        <option>Station</option>
                                                                </select>
                                                        </div>
                                                        <label class="col-md-3 control-label" for="pnr">Incident Date:</label>
                                                        <div class="col-md-4">          
                                                        <input type="date" class="form-control" id="pnr" placeholder="Date">
                                                        </div>
                                               
                                                 
                                            </div>
                                            <div class="form-group row">
                                                    <label class="col-md-2 control-label" for="pnr">Name:</label>
                                                    <div class="col-md-4">          
                                                            <input type="text" class="form-control" id="pnr" placeholder="Name">
                                                    </div>
                                                    <label class="col-md-2 control-label" style="padding-left:0px;" for="pnr">Contact No:</label>
                                                    <div class="col-md-4">          
                                                    <input type="number" class="form-control" id="pnr" placeholder="Contact No">
                                                    </div>
                                           
                                             
                                        </div>
                                            <div class="form-group row">
                                                    <label class="col-md-6 control-label" for="email">Email ID:</label>
                                                    <div class="col-md-6">          
                                                      <input type="email" class="form-control" id="email" placeholder="Email ID">
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label class="col-md-6 control-label" for="email">Id Proof (DL/Adhar/VoterId/Pan):</label>
                                                    <div class="col-md-6">          
                                                      <input type="email" class="form-control" id="email" placeholder="Id Proof (DL/Adhar/VoterId/Pan)">
                                                    </div>
                                            </div>
                                          </form>
                            </fieldset>
                    </div>          
        </div>
</div>
@endsection
