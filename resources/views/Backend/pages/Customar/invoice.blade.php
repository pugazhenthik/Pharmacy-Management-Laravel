<div class="modal fade" tabindex="-1" role="dialog" id="view">
    <div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title"><b >View Customer</b></h4> 
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
    </div>
     <div class="modal-body">
         <div id="printDiv" class="invoice">
             <div class="row">
                 <div class="col-sm-6 invoice-left">
                     <a href="/">
                        <img src="{{asset('Backend_assets/assets/img/favicon1.png')}}"  width="60" alt="">
                        <b >Pharmacy BD</b>
                    </a>
                </div> 
                <div class="col-sm-6 invoice-right">
                    </div>
                </div> 
                <hr class="margin">
                 <div class="row">
                     <div class="col-sm-6 invoice-left"><h4 >Customer Details</h4> 
    <strong >Name: </strong>{{ $customar-> customar_name}}
    <br > <strong >Mobile: </strong>{{ $customar-> customar_mobile}}
    <br > <strong >Address: </strong>{{ $customar-> customar_address}}
    <br > <strong >Due Able: </strong>NO
     </div>
     </div>
 <div class="margin">
     </div>  
     <div class="row">
         <div class="col-md-4">
             </div>
              <div class="col-md-4">
                 </div> 
                 <div class="col-md-4">
                     <table class="pull-right table table-bordered">
                         <tbody >
                             <tr >
                             <td ><b>Total Product</b></td> 
                             <td ><b>0</b></td>
                            </tr> <tr >
                                <td ><b>Total Amount</b></td> 
                                <td ><b>0</b></td>
                            </tr> 
                            <tr >
                                <td ><b>Total Paid</b></td>
                                 <td ><b>0</b></td>
                                </tr>
                                 <tr >
                                     <td ><b>Total Change</b></td>
                                      <td ><b>0</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-4 invoice-left"></div> 
                        <div class="col-sm-4"></div>
                         <div class="col-sm-4 invoice-right">
                             </div>
                            </div>
                             <center style="margin-top: 15px;">
                                <p ><strong> Developed By:</strong>
                                </p>
                                <hr style="margin-top: -5px; margin-bottom: 5px; width: 20%;"> 
                                <span style="color: black; font-size: 12px;"> Pharmacy BD</span>
                                 <br > <span style="color: black; font-size: 12px;">(234) 145-1810</span> <br > 
                                 <span style="color: black; font-size: 12px;">Pharmacy@Pharmacy.com</span> <br > 
                                 <span style="color: black; font-size: 12px;">Mirpur 1, Dhaka</span> <p ></p>
                            </center>
                        </div>
                    </div> 
                    <div class="modal-footer">
                                    <button class="btn btn-success btn-icon icon-left hidden-print">Print Details<i class="entypo-doc-text"></i></button> <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button></div></div>
    </div>
</div>   