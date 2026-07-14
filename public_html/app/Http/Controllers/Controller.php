<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\About;
use App\Models\Activity;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Institution;
use App\Models\School;
use App\Models\Service;
use App\Models\Autism;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function siteCommonData()
    {
        setlocale(LC_ALL, 'tr_TR.UTF-8');

        $commonModels = new \stdClass();

        $commonModels->services = Service::orderBy('id')->get();
        $commonModels->autism = Autism::orderBy('id')->get();
        $commonModels->about = About::orderBy('id')->get();
        $commonModels->schools = School::orderBy('id')->get();
        $commonModels->institution = Institution::orderBy('id')->get();

        return $commonModels;
    }

    /**
     * @param $pageUrl
     * @param $id
     * @param $title
     * @param $tags
     *
     * @return string
     */
    public static function tags($pageUrl, $id, $title, $tags)
    {
        $tagsArray = explode(',', $tags);

        $tagsLinksArray = array();
        foreach ($tagsArray as $tag) {
            $tagName = trim($tag);
            $routeUrl = Helper::slugify($pageUrl, [['id' => $id, 'title' => $title]]);
            if (!empty($tagName)) {
                $tagsLinksArray[] = '<li><a href="' . $routeUrl . '" title="' . $title . '">' . $tagName . '</a></li>';
            }
        }

        return implode('', $tagsLinksArray);
    }

    /**
     * @param $route
     * @param $params
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|\Illuminate\Foundation\Application|string
     */
    public static function slugify($route, $params)
    {
        $paramsWithSlug = array_map(function ($param) {
            return sprintf('%s-%s', $param['id'], Str::slug($param['title']));
        }, $params);

        return url(sprintf('%s/%s', $route, implode('/', $paramsWithSlug)));
    }
}
