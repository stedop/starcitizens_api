<?php

namespace StarCitizen\Models;

/**
 * Class Profile
 *
 * @package StarCitizen\Models
 */
class Profile
{
    public $handle;
    public $citizen_number;
    public $status;
    public $moniker;
    public $avatar;
    public $enlisted;
    public $title;
    public $title_image;
    public $bio;
    public $website_link;
    public $website_title;
    public $country;
    public $region;
    public $fluenc;
    public $discussion_count;
    public $post_count;
    public $last_forum_visit;
    public $forum_roles;
    public $organizations;
    public $date_added;
    public $last_scrape_date;

    public function __construct($profileData)
    {
        foreach ($profileData as $key => $value) {
            $this->$key = $value;
        }
    }
}