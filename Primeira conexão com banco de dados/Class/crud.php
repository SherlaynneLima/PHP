<?php
class Crud{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    // Executa SELECT (consulta)
    public function getSQLGeneric($sql, $arrayParams = null, $fetchAll = true){
        try{
            $stm = $this->pdo->prepare($sql);

            if(!empty($arrayParams)){
                $cont = 1;
                foreach($arrayParams as $valor){
                    $stm->bindValue($cont, $valor);
                    $cont++;
                }
            }

            $stm->execute();

            if($fetchAll){
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            }else{
                return $stm->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e){
            return (object)[
                'sucesso' => 0,
                'erro' => $e->getMessage()
            ];
        }
    }

    // Executa INSERT, UPDATE e DELETE
    public function executeSQLGeneric($sql, $arrayParams = null){
        try{
            $stm = $this->pdo->prepare($sql);

            if(!empty($arrayParams)){
                $cont = 1;
                foreach($arrayParams as $valor){
                    $stm->bindValue($cont, $valor);
                    $cont++;
                }
            }

            $stm->execute();

            return (object)[
                'sucesso' => 1,
                'erro' => ''
            ];
        } catch (PDOException $e){
            return (object)[
                'sucesso' => 0,
                'erro' => $e->getMessage()
            ];
        }
    }
}