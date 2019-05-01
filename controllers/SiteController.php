<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Avtos;
use app\models\Add_car;
use app\models\SignupForm;
use app\models\User;
use yii\db\ActiveRecord;
use yii\data\Pagination;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSignup(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new SignupForm();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $user = new User();
            $user->username = $model->username;
            $user->password = \Yii::$app->security->generatePasswordHash($model->password);
            if($user->save()){
                return $this->goHome();
            }
        }

        return $this->render('signup', compact('model'));
    }
    
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

	public function actionAvtos()
	{
		$avtos = Avtos::find();

		$pagination = new Pagination ([

		    'defaultPageSize'=>7,
            'totalCount' => $avtos-> count()
        ]);
        $avtos = $avtos->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

		return $this->render('avtos',[
	    	'avtos'=>$avtos,
            'pagination'=>$pagination
		]);
	}
	public function actionAdd_car()
    {
        $Add_car= new Add_car();
        if ($Add_car->load(Yii::$app->request->post()) && $Add_car->validate())
            {
                $marka_model = Html:: encode($Add_car->marka_model);
                $color = Html:: encode($Add_car->color);
                $year = Html:: encode($Add_car->year);
                $fuel = Html:: encode($Add_car->fuel);
                $rashod = Html:: encode($Add_car->rashod);
                $moschnost = Html:: encode($Add_car->moschnost);
                $reg_nomer = Html:: encode($Add_car->reg_nomer);
                $price = Html:: encode($Add_car->price);


                $avtos = new Avtos();
                $avtos->marka_model = $marka_model;
                $avtos->color = $color;
                $avtos->year = $year;
                $avtos->fuel = $fuel;
                $avtos->rashod = $rashod;
                $avtos->moschnost = $moschnost;
                $avtos->reg_nomer = $reg_nomer;
                $avtos->price = $price;

                $avtos->save();

                $this->redirect('index.php?r=site%2Fadd_car_success');
            }
            else {
                $marka_model ='';
                $color ='';
                $year = '';
                $fuel = '';
                $rashod ='';
                $moschnost = '';
                $reg_nomer = '';
                $price = '';
            }
        return $this->render('Add_car',
            ['Add_car'=>$Add_car,
            'marka_model'=>$marka_model,
            'color'=>$color,
            'year'=>$year,
            'fuel'=>$fuel,
            'rashod'=>$rashod,
            'moschnost'=>$moschnost,
            'reg_nomer'=>$reg_nomer,
            'price'=>$price
            ]

            );
    }

    public function actionDelete_car_success(){
        return $this->render('delete_car_success');
    }

    public function actionDelete_car($id)
    {
        $post = Avtos::findOne($id);
        $post->delete();
        return $this->render('delete_car_success');

    }
    public function actionPage_car()
    {
        $avtos = Avtos::find()->all();
        return $this->render('page_car',[
            'avtos'=>$avtos
        ]);
    }
}
