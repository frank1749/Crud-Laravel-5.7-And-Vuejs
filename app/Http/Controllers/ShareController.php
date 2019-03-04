<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Share;
use App\User;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Single Response
     */
    public function index()
    {
        $shares = Share::all();

        return view('shares.index', compact('shares'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function load_data()
    {
        $shares = Share::all();

        $data = array('datos' => $shares);

        return $this->jsonResponse(true, "Operación de consulta de datos", "Se generó exitosamente la consulta.",0000,$data,200);
    }

    /**
    * Muestra los datos de un registro específico.
    *
    * @param  int  $id: Es el id del registro  
    * @return Single Response
    */

    public function infoData(Request $request)
    {

        $id = $request->get('id');

        $share = Share::find($id);

        $data = array('data_info' => $share);

        return $this->jsonResponse(true, "Operación de consulta de registro", "Se generó exitosamente la consulta del registro.",0000,$data,200);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shares.create');
    }

    /**
    * Almacenamiento de producto.
    *
    * @param  string  $share_name: Es el nombre del producto.  
    * @param  string  $share_price: Es el valor del producto.  
    * @param  int  $share_qty: Es la cantidad del producto.  
    * @return Single Response
    */
    public function store(Request $request)
    {

      $insert_vals = \DB::table('shares')->insert(
                        [   
                            'share_name' => $request->get('share_name'), 
                            'share_price' => $request->get('share_price'),
                            'share_qty' => $request->get('share_qty')
                        ]
                    );

      if ($insert_vals) {

        return $this->jsonResponse(true, "Datos almacenados", "Guardado exitoso.",0000,null,200);

      }else{

        return $this->jsonResponse(false, "Errores de datos", "Error de Inserción",0000,null,500);

      }

      //return redirect('/shares')->with('success', 'Stock has been added');

    }

    /**
    * Servicio que permite eliminar registro.
    * POST {id}
    *
    * @param  int  $id  El id del regisgtro
    * @return Response
    */    
    public function del_data(Request $request)
    {

        $id = $request->get('id');
        $del = \DB::table('shares')->where('id', '=', $id)->delete();

        if ($del) {

            return $this->jsonResponse(true, "Datos Eliminados", "Eliminación exitosa.",0000,null,200);

        }else{

            return $this->jsonResponse(false, "Errores de datos", "Error de Eliminación",0000,null,500);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $share = Share::find($id);

        return view('shares.edit', compact('share'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $request->validate([
        'share_name'=>'required',
        'share_price'=> 'required|integer',
        'share_qty' => 'required|integer'
      ]);

      $id = $request->get('id');

      $share = Share::find($id);
      $share->share_name = $request->get('share_name');
      $share->share_price = $request->get('share_price');
      $share->share_qty = $request->get('share_qty');
      $share->save();

      if ($share) {

        return $this->jsonResponse(true, "Datos Actualizados", "Actualización exitoso.",0000,null,200);

      }else{

        return $this->jsonResponse(false, "Errores de Actualización", "Error de Actualización",0000,null,500);

      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Share::find($id);
        $share->delete();

      return redirect('/shares')->with('success', 'Stock has been deleted Successfully');
    }

    public function probar()
    {

        /*$email = $request->get('email');
        $pass = $request->get('pass');*/

        $email = "frank1749@hotmail.com";

        $user_data = \DB::table('users')->where('email', $email)->first();

        if (empty($user_data)) {
           return $this->jsonResponse(false, "Errores de Actualización", "Error de Actualización",0000,null,200); 
        }else{
            return $this->jsonResponse(true, "Errores de Actualización", "Error de Actualización",0000,$email,200);
        }

        //echo $user->name;

        /*$email = $request->get('email');
        $pass = $request->get('pass');

        return $this->jsonResponse(false, "Errores de Actualización", "Error de Actualización",0000,$email,200);*/

    }

}
