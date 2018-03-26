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
                                        <label class="col-md-6 control-label" for="email">Address:</label>
                                        <div class="col-md-6">          
                                                <textarea class="form-control" rows="2" id="address" placeholder="Address"></textarea>
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
                                                                <label class="col-md-2 control-label" for="pnr">Zone:</label>
                                                                <div class="col-md-4">          
                                                                                <input class="form-control" type="text" placeholder="Zone">
                                                                </div>
                                                                <label class="col-md-2 control-label" for="pnr">Division:</label>
                                                                <div class="col-md-4">          
                                                                                <input class="form-control" type="text" placeholder="Division">
                                                                </div>
                                                       
                                                         
                                                </div>
                                            <div class="form-group row">
                                                    <label class="col-md-4 control-label">Train No./Name*:</label>
                                                    <div class="col-md-8">
                                                      <input class="form-control" type="text" placeholder="Train No./Name">
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                              <label class="col-md-4 control-label" for="pnr">From Station:</label>
                                              <div class="col-md-8">          
                                                <input type="text" class="form-control" id="pnr" placeholder="From Station">
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 control-label" for="pnr">To Station:</label>
                                                <div class="col-md-8">          
                                                  <input type="text" class="form-control" id="pnr" placeholder="To Station">
                                                </div>
                                              </div>
                                            <div class="form-group row">
                                                        <label class="col-md-3 control-label" for="pnr">Coach Class:</label>
                                                        <div class="col-md-3">          
                                                                <select class="form-control" id="sel1">
                                                                        <option value="0">--Select--</option>
                                                                        <option value="1">AC</option>
                                                                        <option value="2">SLEEPER</option>
                                                                        <option value="3">2S</option>
                                                                        <option value="4">GENERAL</option>
                                                                        <option value="5">PANTRY CAR</option>
                                                                </select>
                                                        </div>
                                                        <label class="col-md-3 control-label" for="pnr">Total Passengers:</label>
                                                        <div class="col-md-3">          
                                                                <select class="form-control" id="totalpass" data-live-search="true">
                                                                        <option value="1" data-tokens="1">1</option>
                                                                        <option value="2" data-tokens="2">2</option>
                                                                        <option value="3" data-tokens="3">3</option>
                                                                        <option value="4" data-tokens="4">4</option>
                                                                        <option value="5" data-tokens="5">5</option>
                                                                </select>
                                                        </div>
                                               
                                                 
                                            </div>
                                            <div class="form-group row">
                                                    <label class="col-md-3 control-label" for="pnr">Ticket Amount:</label>
                                                    <div class="col-md-2">          
                                                            <input type="text" class="form-control" id="pnr" placeholder="Amount">
                                                    </div>
                                                    <label class="col-md-4 control-label" style="padding-left:0px;" for="pnr">Coach No.(like H1, A1 & S1):</label>
                                                    <div class="col-md-3">    
                                                    <select class="form-control" id="coachno">            
                                                        <option value="0">--Select--</option>
                                                        <option value="1">H1</option>
                                                        <option value="2">H2</option>
                                                        <option value="3">A1</option>
                                                        <option value="4">A2</option>
                                                        <option value="5">A3</option>
                                                        <option value="6">A4</option>
                                                        <option value="7">A5</option>
                                                        <option value="8">A6</option>
                                                        <option value="9">B1</option>
                                                        <option value="10">B2</option>
                                                        <option value="11">B3</option>
                                                        <option value="12">B4</option>
                                                        <option value="13">B5</option>
                                                        <option value="14">B6</option>
                                                        <option value="15">B7</option>
                                                        <option value="16">B8</option>
                                                        <option value="17">B9</option>
                                                        <option value="18">B10</option>
                                                        <option value="19">B11</option>
                                                        <option value="20">C1</option>
                                                        <option value="21">C2</option>
                                                        <option value="22">C3</option>
                                                        <option value="23">C4</option>
                                                        <option value="24">C5</option>
                                                        <option value="25">C6</option>
                                                        <option value="26">C7</option>
                                                        <option value="27">C8</option>
                                                        <option value="28">C9</option>
                                                        <option value="29">C10</option>
                                                        <option value="30">C11</option>
                                                        <option value="31">C12</option>
                                                        <option value="32">C13</option>
                                                        <option value="33">C14</option>
                                                        <option value="34">E1</option>
                                                        <option value="35">E2</option>
                                                        <option value="36">Extra Coach</option>
                                                        <option value="37">S1</option>
                                                        <option value="38">S2</option>
                                                        <option value="39">S3</option>
                                                        <option value="40">S4</option>
                                                        <option value="41">S5</option>
                                                        <option value="42">S6</option>
                                                        <option value="43">S7</option>
                                                        <option value="44">S8</option>
                                                        <option value="45">S9</option>
                                                        <option value="46">S10</option>
                                                        <option value="47">S11</option>
                                                        <option value="48">S12</option>
                                                        <option value="49">S13</option>
                                                        <option value="50">S14</option>
                                                        <option value="51">S15</option>
                                                        <option value="52">S16</option>
                                                        <option value="53">S17</option>
                                                        <option value="54">S18</option>
                                                    </select>
                                                    </div>
                                        </div>
                                            <div class="form-group row">
                                                    <label class="col-md-6 control-label" for="email">Berth/Seat No.:</label>
                                                    <div class="col-md-6">          
                                                        <select class="form-control" id="totalpass">
                                                                        <option value="0">--Select--</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                        <option value="13">13</option>
                                                                        <option value="14">14</option>
                                                                        <option value="15">15</option>
                                                                        <option value="16">16</option>
                                                                        <option value="17">17</option>
                                                                        <option value="18">18</option>
                                                                        <option value="19">19</option>
                                                                        <option value="20">20</option>
                                                                        <option value="21">21</option>
                                                                        <option value="22">22</option>
                                                                        <option value="23">23</option>
                                                                        <option value="24">24</option>
                                                                        <option value="25">25</option>
                                                                        <option value="26">26</option>
                                                                        <option value="27">27</option>
                                                                        <option value="28">28</option>
                                                                        <option value="29">29</option>
                                                                        <option value="30">30</option>
                                                                        <option value="31">31</option>
                                                                        <option value="32">32</option>
                                                                        <option value="33">33</option>
                                                                        <option value="34">34</option>
                                                                        <option value="35">35</option>
                                                                        <option value="36">36</option>
                                                                        <option value="37">37</option>
                                                                        <option value="38">38</option>
                                                                        <option value="39">39</option>
                                                                        <option value="40">40</option>
                                                                        <option value="41">41</option>
                                                                        <option value="42">42</option>
                                                                        <option value="43">43</option>
                                                                        <option value="44">44</option>
                                                                        <option value="45">45</option>
                                                                        <option value="46">46</option>
                                                                        <option value="47">47</option>
                                                                        <option value="48">48</option>
                                                                        <option value="49">49</option>
                                                                        <option value="50">50</option>
                                                                        <option value="51">51</option>
                                                                        <option value="52">52</option>
                                                                        <option value="53">53</option>
                                                                        <option value="54">54</option>
                                                                        <option value="55">55</option>
                                                                        <option value="56">56</option>
                                                                        <option value="57">57</option>
                                                                        <option value="58">58</option>
                                                                        <option value="59">59</option>
                                                                        <option value="60">60</option>
                                                                        <option value="61">61</option>
                                                                        <option value="62">62</option>
                                                                        <option value="63">63</option>
                                                                        <option value="64">64</option>
                                                                        <option value="65">65</option>
                                                                        <option value="66">66</option>
                                                                        <option value="67">67</option>
                                                                        <option value="68">68</option>
                                                                        <option value="69">69</option>
                                                                        <option value="70">70</option>
                                                                        <option value="71">71</option>
                                                                        <option value="72">72</option>
                                                                        <option value="73">73</option>
                                                                        <option value="74">74</option>
                                                                        <option value="75">75</option>
                                                                        <option value="76">76</option>
                                                                        <option value="77">77</option>
                                                                        <option value="78">78</option>
                                                                        <option value="79">79</option>
                                                                        <option value="80">80</option>
                                                                        <option value="81">81</option>
                                                                        <option value="82">82</option>
                                                                        <option value="83">83</option>
                                                                        <option value="84">84</option>
                                                                        <option value="85">85</option>
                                                                        <option value="86">86</option>
                                                                        <option value="87">87</option>
                                                                        <option value="88">88</option>
                                                                        <option value="89">89</option>
                                                                        <option value="90">90</option>
                                                                        <option value="91">91</option>
                                                                        <option value="92">92</option>
                                                                        <option value="93">93</option>
                                                                        <option value="94">94</option>
                                                                        <option value="95">95</option>
                                                                        <option value="96">96</option>
                                                                        <option value="97">97</option>
                                                                        <option value="98">98</option>
                                                                        <option value="99">99</option>
                                                                        <option value="100">100</option>
                                                                        <option value="101">101</option>
                                                                        <option value="102">102</option>
                                                                        <option value="103">103</option>
                                                                        <option value="104">104</option>
                                                                        <option value="105">105</option>
                                                                        <option value="106">106</option>
                                                                        <option value="107">107</option>
                                                                        <option value="108">108</option>
                                                        </select>            
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label class="col-md-6 control-label" for="email">Station Name (Nearby Station where train is Standing/Passing/Reaching/Departed):</label>
                                                    <div class="col-md-6">          
                                                                <textarea class="form-control" rows="2" id="address" placeholder="Station Name (Nearby Station where train is Standing/Passing/Reaching/Departed)"></textarea>
                                                    </div>
                                            </div>
                                          </form>
                            </fieldset>
                    </div>          
        </div>
</div>
@endsection
