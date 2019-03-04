<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        @include('includes.docs.api.v1.head')
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-3" id="sidebar">
                    <div class="column-content">
                        <div class="search-header">
                            <img src="/assets/docs/api.v1/img/f2m2_logo.svg" class="logo" alt="Logo" />
                            <input id="search" type="text" placeholder="Search">
                        </div>
                        <ul id="navigation">

                            <li><a href="#introduction">Introduction</a></li>

                            

                            <li>
                                <a href="#Share">Share</a>
                                <ul>
									<li><a href="#Share_load_data">load_data</a></li>

									<li><a href="#Share_infoData">infoData</a></li>

									<li><a href="#Share_store">store</a></li>

									<li><a href="#Share_del_data">del_data</a></li>

									<li><a href="#Share_update">update</a></li>

									<li><a href="#Share_probar">probar</a></li>
</ul>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-9" id="main-content">

                    <div class="column-content">

                        @include('includes.docs.api.v1.introduction')

                        <hr />

                                                

                                                <a href="#" class="waypoint" name="Share"></a>
                        <h2>Share</h2>
                        <p></p>

                        
                        <a href="#" class="waypoint" name="Share_load_data"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>load_data</h3></li>
                            <li>api/v1/dataSite</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Display a listing of the resource.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc"></p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/v1/dataSite" type="GET">
                          <div class="endpoint-paramenters">
                            
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Share_infoData"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>POST</h2></li>
                            <li><h3>infoData</h3></li>
                            <li>api/v1/infoData</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Muestra los datos de un registro específico.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc"></p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/v1/infoData" type="POST">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id:</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">Es el id del registro</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id:">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="POST"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Share_store"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>POST</h2></li>
                            <li><h3>store</h3></li>
                            <li>api/v1/insertData</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Almacenamiento de producto.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc"></p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/v1/insertData" type="POST">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">share_name:</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">Es el nombre del producto.</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="share_name:">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">share_price:</div>
                                <div class="parameter-type">string</div>
                                <div class="parameter-desc">Es el valor del producto.</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="share_price:">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">share_qty:</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">Es la cantidad del producto.</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="share_qty:">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="POST"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Share_del_data"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>POST</h2></li>
                            <li><h3>del_data</h3></li>
                            <li>api/v1/deleteData</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Servicio que permite eliminar registro.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc">POST {id}</p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/v1/deleteData" type="POST">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc">El id del regisgtro</div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="POST"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Share_update"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>POST</h2></li>
                            <li><h3>update</h3></li>
                            <li>api/v1/updateData</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc">Update the specified resource in storage.</p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc"></p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/v1/updateData" type="POST">
                          <div class="endpoint-paramenters">
                            <h4>Parameters</h4>
                            <ul>
                              <li class="parameter-header">
                                <div class="parameter-name">PARAMETER</div>
                                <div class="parameter-type">TYPE</div>
                                <div class="parameter-desc">DESCRIPTION</div>
                                <div class="parameter-value">VALUE</div>
                              </li>
                                                           <li>
                                <div class="parameter-name">request</div>
                                <div class="parameter-type">\Illuminate\Http\Request</div>
                                <div class="parameter-desc"></div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="request">
                                </div>
                              </li>
                             <li>
                                <div class="parameter-name">id</div>
                                <div class="parameter-type">int</div>
                                <div class="parameter-desc"></div>
                                <div class="parameter-value">
                                    <input type="text" class="parameter-value-text" name="id">
                                </div>
                              </li>

                            </ul>
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="POST"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>

                        <a href="#" class="waypoint" name="Share_probar"></a>
                        <div class="endpoint-header">
                            <ul>
                            <li><h2>GET</h2></li>
                            <li><h3>probar</h3></li>
                            <li>api/v1/prueba_data</li>
                          </ul>
                        </div>

                        <div>
                          <p class="endpoint-short-desc"></p>
                        </div>
                       <!--  <div class="parameter-header">
                             <p class="endpoint-long-desc"></p>
                        </div> -->
                        <form class="api-explorer-form" uri="api/v1/prueba_data" type="GET">
                          <div class="endpoint-paramenters">
                            
                          </div>
                           <div class="generate-response" >
                              <!-- <input type="hidden" name="_method" value="GET"> -->
                              <input type="submit" class="generate-response-btn" value="Generate Example Response">
                          </div>
                        </form>
                        <hr>


                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
