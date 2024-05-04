<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuario;
class Usuarios extends Controller{

    public function index(){

        $usuario = new Usuario();
        $datos['usuarios'] = $usuario->orderBy('usuario', 'ASC')->findAll();

        $datos['cabecera'] = view ('template/cabecera');
        $datos['pie'] = view ('template/piepagina');
    
        return view('usuarios/listar',$datos);
    }

    public function crear(){

        $datos['cabecera'] = view ('template/cabecera');
        $datos['pie'] = view ('template/piepagina');
        
        return view('usuarios/crear', $datos);

    }

    public function guardar(){

        $usuario = new Usuario();

        $datos = [
            'usuario' => $this->request->getVar('usuario'),
            'nombre' => $this->request->getVar('nombre'),
            'correo' => $this->request->getVar('correo'),
            'password' => $this->request->getVar('password')
        ];

        $usuario->insert($datos);

    if($usuario->insertID()){
        return $this->response->redirect(site_url('/listar'));   
        }else{
            echo "No se pudo guardar";
        }



        return $this->response->redirect(site_url('/listar'));
    }


    public function eliminar($usuario = null){

        $eliminarUsuario = new Usuario();
        $eliminarUsuario->where('usuario', $usuario)->delete();

        return $this->response->redirect(site_url('/listar'));
    }

    public function editar($usuarioNombre = null){

        print_r($usuarioNombre);

        $usuario = new Usuario();
        $datos['usuario'] = $usuario->where('usuario', $usuarioNombre)->first();

        $datos['cabecera'] = view ('template/cabecera');
        $datos['pie'] = view ('template/piepagina');

        return view('usuarios/editar', $datos);

    }

    public function actualizar($usuarioNombre = null){

        $usuario = new Usuario();

        $datos = [
            'usuario' => $this->request->getVar('usuario'),
            'nombre' => $this->request->getVar('nombre'),
            'correo' => $this->request->getVar('correo'),
            'password' => $this->request->getVar('password')
        ];

        $usuario->update($this->request->getVar('usuarioNombre'), $datos);

        return $this->response->redirect(site_url('/listar'));

    
    }

}