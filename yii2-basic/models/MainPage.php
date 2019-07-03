<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\Query;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class MainPage extends Model
{
	public function getDogs() {
		return Dogs::getDogs();
	}

	public function saveDogs($arrDogs) {
		if ($arrDogs['remove_id']) {
			$dog = Dogs::findOne($arrDogs['remove_id']);
			if ($dog != null)
				$dog->delete();
			return;
		}

		foreach ($arrDogs['dogs'] as $currentDog) {
			// foreach ($currentDog as $arrFields) {
			$dogs = Dogs::findOne($currentDog['id']);
			if ($dogs == null) {
				$dogs = new Dogs();
				$dogs->owner_name = $currentDog['owner'];
				$dogs->name = $currentDog['name'];
				$dogs->age = $currentDog['age'];
				$dogs->save();
				return;
			}
			// $dogs->id = $currentDog['id'];
			$dogs->owner_name = $currentDog['owner'];
			$dogs->name = $currentDog['name'];
			$dogs->age = $currentDog['age'];
			$dogs->update();
		}
	}
}
