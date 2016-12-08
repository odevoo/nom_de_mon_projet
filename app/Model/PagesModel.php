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
        
        $this->slug = $this->slugify($page['slug']);
        $this->customdata = $page['customdata'];
        $this->title = $page['title'];
        $this->category = $page['category'];

        $this->insert(['title' => $this->title, 'slug' => $this->slug, 'custom_data' => $this->customdata, 'category' => $this->category]);

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