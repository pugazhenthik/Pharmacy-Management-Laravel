@extends('Backend.layouts.app')
@section('title') Seal @endsection
@section('head', 'Add Sea;')
@section('content')
<div>
    <h3>Sale</h3> 
    <br> 
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Sale Product</div> 
            <div class="panel-options"><a href="#/sale" class="router-link-active" type="button" style="margin-top: 4px;">
                <button class="btn btn-blue btn-sm">List</button></a>
            </div>
        </div>
     <form>
         <div class="container-fluid panel panel-primary">
             <div class="row">
                 <div class="col-sm-6">
                     <div class="row" style="padding-bottom: 5px;">
                        <div class="col-md-4"><input type="date" class="form-control"></div>
                         <div class="col-md-4">
                             <div class="input-group">
                                 <input type="text" placeholder="Enter Customer Phone" class="form-control">
                                 <span class="input-group-btn"><button type="button" class="btn btn-primary"><i class="entypo-arrows-ccw"></i></button></span>
                            </div>
                        </div> 
                        <div class="col-md-4">
                            <input type="text" placeholder="Enter Customer Name" class="form-control">
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-4">
                        <select class="form-control">
                            <optgroup label="Manufacturer List">
                                <option value="1">Beximco</option>
                                <option value="2">Skg</option>
                                <option value="3">Square</option>
                                <option value="4">Incepta</option>
                            </optgroup>
                        </select>
                    </div> 
                    <div class="col-md-4">
                        <select class="form-control">
                            <optgroup label="Generic List">
                                <option value="14">Esomeprazole</option>
                                <option value="15">Vitamin D3</option>
                            </optgroup>
                        </select>
                    </div> 
                    <div class="col-md-4">
                        <select class="form-control">
                            <optgroup label="Category List">
                                <option value="1">Tablet</option>
                                <option value="2">Syrup</option>
                                <option value="3">Liquid</option>
                                <option value="18">My Category</option>
                            </optgroup>
                        </select>
                    </div>
                </div> 
                <div class="row" style="margin-top: 5px;">
                    <div class="col-md-4"></div> 
                    <div class="col-md-4">
                        <div class="input-group minimal">
                            <input type="text" placeholder="Search Medicine By Name, SKU etc." class="form-control"> 
                            <span class="input-group-addon"><i class="entypo-search"></i></span>
                        </div>
                    </div>
                     <div class="col-md-4"></div>
                    </div> 
                    <div class="custom-div3">
                        <div class="custom-div2">
                            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                                <div class="card text-center">
                                    <img src="assets/images/Medicines/1600925177.webp" alt="Card image cap" class="card-img-top" style="max-width: 14rem; max-height: 10rem;">
                                     <div class="card-body"><h5>Seclo(b)</h5> <p>Esomeprazole</p></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                                <div class="card text-center">
                                    <img src="assets/images/Medicines/1600753332.webp" alt="Card image cap" class="card-img-top" style="max-width: 14rem; max-height: 10rem;"> 
                                    <div class="card-body"><h5>Ace(b)</h5> <p>Parasetamol</p></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                                <div class="card text-center">
                                    <img src="assets/images/Medicines/1600683784.webp" alt="Card image cap" class="card-img-top" style="max-width: 14rem; max-height: 10rem;"> 
                                    <div class="card-body"><h5>SuroDine(pc)</h5> <p>Parasetamol</p></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                                <div class="card text-center">
                                    <img src="assets/images/Medicines/1600683755.webp" alt="Card image cap" class="card-img-top" style="max-width: 14rem; max-height: 10rem;"> 
                                    <div class="card-body"><h5>Flixotide(pc)</h5> <p>Acyclovir</p></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                                <div class="card text-center">
                                    <img src="assets/images/Medicines/1600683730.webp" alt="Card image cap" class="card-img-top" style="max-width: 14rem; max-height: 10rem;">
                                     <div class="card-body"><h5>Tuspel(pc)</h5> <p>Vitamin D3</p></div>
                                    </div>
                                </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                                        <div class="card text-center">
                                            <img src="assets/images/Medicines/1600683691.webp" alt="Card image cap" class="card-img-top" style="max-width: 14rem; max-height: 10rem;"> 
                                            <div class="card-body"><h5>Lexum(pc)</h5> <p>Parasetamol</p></div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                                        <div class="card text-center">
                                            <img src="assets/images/Medicines/1600683612.webp" alt="Card image cap" class="card-img-top" style="max-width: 14rem; max-height: 10rem;"> 
                                            <div class="card-body"><h5>Sofovir-C(pc)</h5> <p>Acyclovir</p></div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4">
                                        <div class="card text-center">
                                            <img src="assets/images/Medicines/1600683552.webp" alt="Card image cap" class="card-img-top" style="max-width: 14rem; max-height: 10rem;"> 
                                            <div class="card-body"><h5>Boxol(pc)</h5> <p>Dexmethylphenidate</p></div>
                                        </div>
                                    </div>
                            </div>           
                                <ul class="pagination" style="margin-left: 2rem;">       
                                  <li class="page-item pagination-page-nav active"><a href="#" class="page-link">
                                        1
                                     <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="page-item pagination-page-nav">
                                    <a href="#" class="page-link">
                                      2
                                   </a>
                                </li>
                                <li class="page-item pagination-page-nav">
                                    <a href="#" class="page-link">
                                     3
                                   </a>
                                </li>
                                <li class="page-item pagination-next-nav">
                                    <a href="#" aria-label="Next" class="page-link">
                                        <span>Next &gt;</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> 
                    <div class="col-sm-6" style="height: 70rem;">
                        <table class="table table-bordered">
                            <thead>
                                <th class="text-center bg-dark " style="max-width: 1rem; color:rgb(248, 248, 248); ">Batch  </th> 
                                <th class="text-center bg-dark" style="max-width: 1rem; color:white;">QTY</th> 
                                <th class="text-center bg-dark" style="max-width: 2rem; color:white;">Product</th> 
                                <th class="text-center bg-dark" style="max-width: 2rem; color:white;">Price</th>
                                 <th class="text-center bg-dark" style="max-width: 2rem;color:white;">Subtotal</th> 
                                 <th class="text-center bg-dark" style="max-width: 2rem; color: white;"><i class="" data-feather="trash"></i></th>
                            </thead>
                        </table>
                         <div class="custom-div">
                             <table class="table table-bordered">
                                 <tbody></tbody>
                            </table>
                        </div> 
                        <table class="table table-bordered">
                            <tfoot>
                                <tr>
                                    <td><h4><b>Total:</b></h4></td>
                                     <td><h4>0</h4></td>
                                </tr> 
                               <tr>
                                   <td><h4><b>Pay:</b></h4></td>
                                    <td><input type="text" class="form-control form-control-sm" style="width: 30%;"></td>
                                </tr> 
                                <tr>
                                    <td><h4><b>Change Due:</b></h4></td>
                                     <td><h4>0</h4></td>
                                </tr>
                                 <tr class="hidden">
                                     <td><h4><b>Due:</b></h4></td>
                                      <td><h4>0</h4></td>
                                </tr> 
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-info btn-lg" style="display: block; width: 100%; height: 100%;">Save</button>
                                    </td>
                                   <td>
                                       <button type="submit" class="btn btn-success btn-lg pull-left" style="width: 100%; height: 100%;">Sale</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div id="saleInvoice" tabindex="-1" aria-hidden="true" class="modal fade in">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="exampleModalLabel" class="modal-title"><b>Sale Invoice</b></h4> 
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                </div>
                 <div class="modal-body">
                     <div id="printDiv" class="invoice">
                         <div class="row">
                             <div class="col-sm-6 invoice-left">
                                 <a href="/">
                                    <img src="assets/images/logo1602840182.webp" width="60" alt=""><b>BD Pharmacy</b>
                                </a>
                            </div> 
                            <div class="col-sm-6 invoice-right">
                                <span>24th October 2020</span><br> 
                                <span>Invoice #</span>
                            </div>
                        </div>
                         <hr class="margin"> 
                         <div class="row">
                             <div class="col-sm-6 invoice-left">
                                 <h4>Customer</h4> 
                                 <strong>Name: </strong>Not Set
                                <br> 
                                <strong>Phone: </strong>Not Set
                            </div>
                        </div> 
                        <div class="margin"></div> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                     <th>Batch</th> 
                                     <th>Product</th> 
                                     <th>Sku</th>
                                      <th>Quantity</th> 
                                      <th>Total Price</th>
                                </tr>
                            </thead> 
                                <tbody>
                                </tbody>
                        </table> 
                        <div class="row">
                            <div class="col-sm-4 invoice-left"></div>
                             <div class="col-sm-4"></div> 
                             <div class="col-sm-4 invoice-right">
                                 <p><strong>Total Amount: </strong>Not Counted</p> 
                                 <p><strong>Paid Amount: </strong>Not Counted</p>
                                  <p><strong>Due Amount: </strong>Not Counted</p> 
                                  <p><strong>Change Due Amount: </strong>Not Counted</p>
                            </div>
                        </div>
                        <center style="margin-top: 15px;">
                            <p><strong style="color: black;"> Developed By:</strong></p>
                            <hr style="margin-top: -5px; margin-bottom: 5px; width: 20%;"> 
                            <span style="color: black; font-size: 12px;">BD Pharmacy</span> 
                            <br> 
                            <span style="color: black; font-size: 12px;">01305976639</span> <br>
                             <span style="color: black; font-size: 12px;">bdpharmacy@gmail.com</span> <br>
                              <span style="color: black; font-size: 12px;">1Mirpur</span> 
                              <p></p>
                        </center>
                    </div>
                </div> 
                <div class="modal-footer">
                    <button class="btn btn-info btn-icon icon-left hidden-print">
						POS Print
                        <i class="entypo-doc-text"></i>
                    </button> 
                    <button class="btn btn-success btn-icon icon-left hidden-print">
						Print Details
                        <i class="entypo-doc-text"></i>
                    </button>
                     <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
              </div>
            </div>
        </div>
    </div> 
    <div id="PosPrintDiv" hidden="hidden" class="invoice">
        <div class="row">
            <div class="col-sm-6 invoice-left"><h3>BD Pharmacy</h3></div> 
            <div class="col-sm-6 invoice-right">
                <span>24th October 2020</span><br>
                 <span>Invoice #</span>
            </div>
        </div> 
        <hr class="margin"> 
        <div class="row">
            <div class="col-sm-6 invoice-left">
                <h4>Customer</h4> 
                <strong>Name: </strong>Not Set
				<br> <strong>Phone: </strong>Not Set
            </div>
        </div> 
        <div class="margin"></div>
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <th class="text-center">#</th>
                      <th>Batch</th> 
                      <th>Product</th> 
                      <th>Sku</th> 
                      <th>Quantity</th> 
                      <th>Total Price</th>
                </tr>
            </thead> 
            <tbody></tbody>
        </table> 
        <div class="row">
            <div class="col-sm-4 invoice-left"></div> 
            <div class="col-sm-4"></div> 
            <div class="col-sm-4 invoice-right"><p><strong>Total Amount: </strong>
					Not Counted</p> <p><strong>Paid Amount: </strong>
					Not Counted</p> <p><strong>Due Amount: </strong>
					Not Counted</p> <p><strong>Change Due Amount: </strong>
                    Not Counted</p>
            </div>
        </div>
         <center style="margin-top: 15px;"><p><strong style="color: black;"> Developed By:</strong>
        </p><hr style="margin-top: -5px; margin-bottom: 5px; width: 20%;">
         <span style="color: black; font-size: 12px;"> BD Pharmacy</span>
          <br> <span style="color: black; font-size: 12px;">01305976639</span> 
          <br> <span style="color: black; font-size: 12px;">bizitbd@gmail.com</span>
           <br> <span style="color: black; font-size: 12px;">  Mirpur 1</span> 
           <p></p>
        </center>
    </div>
</div>
                    
@endsection