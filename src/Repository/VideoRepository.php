<?php

namespace Phplay\Mvc\Repository;

use PDO;
use PDOException;
use Phplay\Mvc\Model\Video;
use RuntimeException;

class VideoRepository
{
      public function __construct(private PDO $pdo)
      {

      }

      public function addVideo(Video $video): bool 
      {
        try {
          $this->pdo->beginTransaction();

          $sqlQuery = 'INSERT INTO videos (url, title) VALUES (:url, :title);';
          $stmt = $this->pdo->prepare($sqlQuery);
          $stmt->bindValue(':url', $video->url, PDO::PARAM_STR);
          $stmt->bindValue(':title', $video->title, PDO::PARAM_STR);
  
          $result = $stmt->execute();
  
          $video->setId((int) $this->pdo->lastInsertId());

          $this->pdo->commit();

          return $result;
        } catch (PDOException $error) {
          $this->pdo->rollBack();
          throw new RuntimeException('Erro ao adicionar vídeo: ' . $error->getMessage());
        }
      }

      public function deleteVideo(int $id): bool {
        try {
            $sqlQuery = 'DELETE FROM videos WHERE id = :id';
            $stmt = $this->pdo->prepare($sqlQuery);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            
            return $stmt->execute();

        } catch (PDOException $error) {
          throw new RuntimeException('Erro ao deletar vídeo: ' . $error->getMessage());
        }
      }

      public function updateVideo(Video $video): bool 
      {
        try {
          $this->pdo->beginTransaction();

          $sqlQuery = 'UPDATE videos SET url = :url, title = :title WHERE id = :id';
          $stmt = $this->pdo->prepare($sqlQuery);
          $stmt->bindValue(':url', $video->url, PDO::PARAM_STR);
          $stmt->bindValue(':title', $video->title, PDO::PARAM_STR);
          $stmt->bindValue(':id', $video->id, PDO::PARAM_INT);

          $result = $stmt->execute();

          $this->pdo->commit();

          return $result;

        } catch (PDOException $error) {
          $this->pdo->rollBack();
          throw new RuntimeException('Erro ao editar vídeo: ' . $error->getMessage());
        }
      }

      public function getAllVideos(): array
      {
        try{
          $stmt = $this->pdo->query('SELECT * FROM videos;');
          $dataVideos = $stmt->fetchAll();

          return array_map($this->hydrateVideo(...), $dataVideos);

        } catch (PDOException $error) {
          throw new RuntimeException('Erro ao listar vídeos: ' . $error->getMessage());
        }
      }

      public function find(int $id)
      {
          try{
            $stmt = $this->pdo->prepare('SELECT * FROM videos WHERE id = :id;');
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            return $this->hydrateVideo($stmt->fetch());
          } catch (PDOException $error) {
              throw new RuntimeException('Erro ao encontrar vídeo: ' . $error->getMessage());
          }
      }

      private function hydrateVideo(array $videoData): Video
      {
        $video = new Video($videoData['url'], $videoData['title']);
        $video->setId($videoData['id']);

        return $video;
      }

}