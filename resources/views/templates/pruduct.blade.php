<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{$one->name}}</a>
                  </h4>
                  <h5>{{$one->price}} {{$one->currency}}</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                 <a href="#" class="addCart" id="good-{{$one->id}}-{{$one->price}}">Add to cart</a>
                </div>
              </div>
            </div>