
<?php

class Brand {
    private $pdo;

    public function __construct ($pdo) {
        $this -> pdo = $pdo;
    }

    public function getAll ($countryCode = null) {
        $countryCodeSets = $countryCode != null;

        if ($countryCodeSets) {
            $state = $this -> pdo -> prepare("SELECT * FROM brands WHERE country_code = ?");
            $state -> execute([$countryCode]);

        } else {
            $state = $this -> pdo -> query("SELECT * FROM brands");

        }

        return $state -> fetchAll();
    }

    public function get ($id) {

        $state = $this -> pdo -> prepare("SELECT * FROM brands WHERE brand_id = ?");
        $state -> execute([$id]);

        return $state -> fetch();

    }

    public function create ($brandData) {

        $brandDataType = get_debug_type($brandData);
        $insertedBrandIDs = [];

        $brandData = $brandDataType == "array" ? $brandData : [ $brandData ];
        $brandDataLength = sizeof($brandData);

        for ($i = 0; $i < $brandDataLength; $i += 1) {

            $currentBrand = $brandData[$i];

            $name    = $currentBrand -> brand_name;
            $image   = $currentBrand -> brand_image;
            $rating  = $currentBrand -> rating;

            $state = $this -> pdo -> prepare("INSERT INTO brands (brand_name, brand_image, rating) VALUES (?, ?, ?)");
            $state -> execute([$name, $image, $rating]);

            array_push($insertedBrandIDs, $this -> pdo -> lastInsertId());
        }

        return $insertedBrandIDs;

    }

    public function delete ($id) {
        $state = $this -> pdo -> prepare("DELETE FROM brands WHERE brand_id = ?");
        return $state -> execute([$id]);
    }

    public function update ($id, $brandData) {
        
        $updateSqlRequest = "";
        $propertyNames  = array_keys(get_object_vars($brandData));
        $propertyValues = array_values(get_object_vars($brandData));
        array_push($propertyValues, $id);

        // Build update request depending on received keys
        for ($i = 0; $i < sizeof($propertyNames); $i += 1) {
            $updateSqlRequest .= ($i == 0) ? $propertyNames[$i] . "=?" : ", " . $propertyNames[$i] . "=?";
        }

        $state = $this -> pdo -> prepare("UPDATE brands SET $updateSqlRequest WHERE brand_id=?");

        return $state -> execute($propertyValues);
    }

}