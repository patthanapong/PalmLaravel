<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;

/**
 *
 */
class PalmController extends Controller
{

  function __construct()
  {
    # code...
  }
  public function index()
  {
    //return 'Hello ihea por and tor';
    return view('palm/index');
  }
  public function play()
  {
  return view('palm/player')
  ->with('Champion','Garen')
  ->with('Country','Demacia');
  }

  public function band()
  {
    $aCss = array('css/song/style.css');
    $aScript = array('js/song/main.js');

    //$band = DB::table('blog_tbl')->get();//แสดงทั้งหมดของตารางนี้
    //$band = DB::table('blog_tbl')->find('2');เรียกข้อมูลที่ 2 จา่กตาราง blog_tbl
    //$band = DB::select('select title,blog from blog_tbl where deleted = ?', [0]);//เรียกข้อมูล title,blog จากตาราง blog_tbl ที่คอลัม deleted = 0
  //$band = DB::insert('insert into blog_tbl (title,blog) values (?,?)', ['green day', 'welcome to my world']);//เพิ่มข้อมูล
  //$band = DB::update('update blog_tbl set blog = "Best of hea" where title = ?', ['green day']); //update ตารางblog_tbl ที่คอลัม blog ที่คอลัม title จากgreenday
  $band = DB::update('update blog_tbl set title = "yellow day" where id = ?', ['6']);//คล้ายๆอันบน
  //$band = DB::delete('delete from blog_tbl where title = ?', ['green day']);//ลบจ้อมูล
  $band = DB::table('blog_tbl')->get();
    dd($band);

    $this->data = array(
      'title' => 'Music Band',
      'Band' =>  'AC DC',
      'Song' => '<u>Back in Black</u>',
      'style' => $aCss,
      'script' => $aScript
    );
    return view('palm/band', $this->data);

  }
}






?>
