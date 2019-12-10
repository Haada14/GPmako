
<table class="table table-striped">
       <tr>
           <th>#</th>          <th>poids Colis</th>           <th>Lieu de depart</th>           <th></th>
       </tr>
       @foreach($parcels as $parcel)
           <tr>
               <th>#</th>
               <th>{{$parcel->weight}}</th>
               <th>{{$parcel->place_departure}} </th>
               <th>
               <p><a href="{{route('editer_parcel',['id'=>$parcel->id])}}">Editer</a>
               </p>
               </th>
           </tr>
       @endforeach
   </table>
