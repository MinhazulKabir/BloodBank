<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Blog
 *
 * @package App
 * @property string $blog_picture
 * @property string $head_line
 * @property text $post
*/
class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = ['blog_picture', 'head_line', 'post'];
    protected $hidden = [];
    
    
    
}
