@extends('layout/dashboard')

@section('content')
  <div class="cards" style="margin: 20px 20px 20px 20px">
    <div class="card" style="margin-bottom: 5px">
        <div class="card-body" style="display: flex;align-items: center;" >
            <div style="width: 3%">
              <p style="font-family: Poppins;margin: 0;font-size: 15px">1</p>
            </div>
    
            <div style="width: 30%">
              <p style="font-family: Poppins;margin: 0;font-size: 15px">Saady muflih</p>
            </div>
    
            <div style="width: 12%">
               <p style="font-family: Poppins;margin: 0;font-size: 15px">Xl PPLG 1</p>
            </div>
    
            <div style="width: 15%;text-align: center;" >
               <p style="font-family: Poppins;margin: 0;font-size: 15px">02-7-2023</p>
            </div>
    
            <div style="width: 15%;text-align: center;" >
               <p style="font-family: Poppins;margin: 0;font-size: 15px">Hotel Oyo  </p>
            </div>          
    
           <button id="edit" style="height: 25px;display: flex;align-items: center;width: 70px;justify-content: center;font-size: 14p;color: white;margin-left: 3%" data-tema="tema"  
            type="button" class="btn btn-info" data-bs-toggle="modal"  data-bs-target="#tema">
                <span style="font-size: 13px">Tema</span>
            </button>
            <div style="margin-left: 3%">
                <form id="target" action="">
                    <select id="status" style="width: 7vw;font-size: 15px;box-sizing: border-box;height: 30px;font-family: 'Quicksand', sans-serif;border:none;border-radius: 2px;border-radius: 3px;" name="" id="">
                        <option value="Approve">Approve</option>
                        <option value="Reject">Reject</option>
                        <option value="Waiting">Waiting</option>
                      </select>        
                    </form>
                </div>
            </div>
        </div>
  </div>
@endsection