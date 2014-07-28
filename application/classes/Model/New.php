<?php defined('SYSPATH') or die('No direct script access.');

class Model_New extends Model {
    
        public function rules()
        {
            return array(
                'title' => array(
                    array('not_empty'),
                ),
                'intro' => array(
                    array('not_empty'),
                ),
                'content' => array(
                    array('not_empty'),
                ),
                'date' => array(
                    array('not_empty'),
                    array('date'),
                ),
            );
        }
        
        public function labels()
        {
            return array(
                'title' => 'Название',
                'date' => 'Дата',
                'intro' => 'Вступительный текст',
                'content' => 'Основной текст',
                );
        }
        
        public function filters()
        {
            return array(
                TRUE => array(
                    array('trim'),
                ),
                'title' => array(
                    array('strip_tags'),
                ),
            );
        }
    
//---------------------------
	public function get_news($limit = NULL)
        {
            $limit = (int) $limit;
            
            if($limit == NULL) 
            {
                //$query = DB::query(Database::SELECT, "SELECT * FROM news");
                $query = DB::select()->from('news');
                return $query->execute();
            }
            else
            {
//                $query = DB::query(Database::SELECT, "SELECT * FROM news LIMIT  :limit");
                $query = DB::select()->from('news')->limit($limit);
                //$query->param(':limit', $limit);
                return $query->execute();
            }
        }
        
        public function get_one_news($id)
        {
            $id = (int) $id;
            //$query = DB::query(Database::SELECT, "SELECT * FROM news WHERE id  :id");
            //$query->param(':id', $id);
            $query = DB::select()
                    ->from('news')
                    ->where('id', '=', $id);
            $result = $query->execute();
            return $result[0];
        }
        
        public function add_news($title, $intro, $content, $data = NULL)
        {
            if($data == NULL) 
            {
                $data = date('d.m.Y');
            }
//            $query = DB::query(Database::INSERT, "INSERN INTO news VALUES "
//                    . "(:id, :title, :intro, :content, :date)");
//            $query->parameters(array(
//                ':id' => $id,
//                ':title' => $title,
//                ':intro' => $intro,
//                ':content' => $content,
//                ':date' => $date,
//            ));
            $query = DB::insert('news', array(
                'title', 'intro', 'content', 'date'))
                    ->values(array(
                        $title, $intro, $content, $data
                    ));
            return $query->execute();
        }
        
        public function update_news($id, $title, $intro, $content, $date = NULL)
        {
            $query = DB::update('news')
                    ->set(array(
                        'title' => $title,
                        'intro' => $intro,
                        'content' => $content,
                        'date' => $date,
                    ))
                    ->where('id', '=', $id);
            return $query->execute();
        }
        
        public function delete_news($id)
        {
            $query = DB::delete('news')->where('id', '=', $id);
            return $query->execute();
        }
       
        public function count_news()
        {
            return DB::select('id')->from('news')->execute()->count(); 
        }

} 
