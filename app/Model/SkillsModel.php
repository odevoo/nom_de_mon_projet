<?php /* app/Model/CommentModel.php */
namespace Model;

use \W\Model\ConnectionModel;

class SkillsModel extends \W\Model\Model 
{
    //Récupère les commentaires associés à un article
    public function __construct() {
        //$app = getApp();
        $this->setTable('skills');
        $this->dbh = ConnectionModel::getDbh();
    }

    public function getSkills($id)
    {
        //$app = getApp();
        $sql = 'SELECT SQL1, PHP, javascript, jquery, wordpress, html, css FROM '. $this->table .' WHERE id = :id LIMIT 1';
        
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        //debug($result);
        return $result;
    }
}