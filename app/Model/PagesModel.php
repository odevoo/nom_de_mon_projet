<?php /* app/Model/CommentModel.php */
namespace Model;

use \W\Model\ConnectionModel;

class PagesModel extends \W\Model\Model 
{   
    protected $id;
    protected $slug;
    protected $title;
    protected $customdata;
    protected $category;
    protected $user_id;
    //Récupère les commentaires associés à un article
    public function __construct() {
        //$app = getApp();
        $this->setTable('pages');
        $this->dbh = ConnectionModel::getDbh();
    }
    public function getPage($id) {
        $page = $this->find($id);
        $this->id = $page['id'];
        $this->slug = $page['slug'];
        $this->customdata = $page['custom_data'];
        $this->title = $page['title'];
        $this->category = $page['category'];
        $this->user_id = $page['user_id'];
    }
    public function getPageBySlug($slug) {
        //$app = getApp();
        $sql = 'SELECT * FROM '. $this->table . ' WHERE slug = :slug LIMIT 1';
        //debug($this->dbh);
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(':slug'. $slug);

        if ($stmt->execute()) {
            $foundpage = $stmt->fetch();
            if ($foundpage) {
                $this->id = $foundpage['id'];
                $this->slug = $foundpage['slug'];
                $this->customdata = $foundpage['custom_data'];
                $this->title = $foundpage['title'];
                $this->category = $foundpage['category'];
                $this->user_id = $foundpage['user_id'];
                return true;

            }
        }
        return false;
    }
    public function getPageById($user_id) {
        //$app = getApp();
        $sql = 'SELECT * FROM '. $this->table . ' WHERE user_id = :user_id LIMIT 1';
        //debug($this->dbh);
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(':user_id'. $user_id);

        if ($stmt->execute()) {
            $foundpage = $stmt->fetch();
            if ($foundpage) {
                $this->id = $foundpage['id'];
                $this->slug = $foundpage['slug'];
                $this->customdata = $foundpage['custom_data'];
                $this->title = $foundpage['title'];
                $this->category = $foundpage['category'];
                $this->user_id = $foundpage['user_id'];


            }
        }
        return false;
    }



    public function getPageTitle() {
        return $this->title;
    }
    public function setPageTitle($title) {
        $this->title = $title;
    }
    public function createPage($page) {
        
        $this->slug = $this->slugify($page['title']);
        $this->customdata = serialize($page['data']);
        $this->title = $page['title'];
        $this->category = $page['category'];
        $this->user_id = $page['user_id'];

        $myPage = $this->insert(['title' => $this->title, 'slug' => $this->slug, 'custom_data' => $this->customdata, 'category' => $this->category, 'user_id' => $this->user_id]);
        return $myPage;

    }
    public function slugify($text)
    {
  // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
        $text = trim($text, '-');

  // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

  // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    
}