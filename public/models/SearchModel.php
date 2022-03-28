<?php
namespace Web\Model;

class SearchModel extends \App\Model\System_Model 
{
	public function select_from_pages($search_query, $limit = 0)
	{
		// $searchMultiWords = explode(" ", $search_query);
		// foreach($searchMultiWords as $term)
		// {
		// 	$sqlready[] = $term;
		// }
		// $search_query = join(" ",$sqlready);  
		// var_dump($search_query);
		// $search_query = '%' . $search_query . '%';
		# Generator to get page content
		if ($limit !== 0)
		{
			$query = "SELECT content, url FROM page_content WHERE content REGEXP '$search_query' LIMIT $limit, 20";
		}
		else
		{
			$query = "SELECT content, url FROM page_content WHERE content REGEXP '$search_query'";
		}
		$r = $this->db->prepare($query);
		$r->execute();
		foreach ($r as $row)
		{
			yield $row;
		}

	}

	public function select_from_pages_results($search_query, $limit = 0)
	{
		$content = [];
		# Iterate through generator
		foreach (self::select_from_pages($search_query, $limit) as $key => $results)
		{
			# We want to highlight the search keywords in the results, so we'll
			# need to remove the % symbols from the search query that we added
			# to the search query as part of the SQL in select_from_pages()
			// $search_query = str_replace("%", "", $search_query);
			$results = str_replace("$search_query", "<span style='background-color: yellow;'>$search_query</span>", $results);
			$content[] = $results;
		}
		return $content;
	}

	public function img_gallery($id)
	{
		# Get user image gallery
		$r = $this->db->prepare("SELECT * FROM images WHERE owner_id = ?");
		$r->execute([$id]);
		if ($r->rowCount() >= 1)
		{
			return $r;
		}
		else
		{
			return FALSE;
		}

	}

	public function count($table)
	{

		# get the number of rows from our query
		$query = $this->db->prepare("SELECT COUNT(*) as count FROM $table");
		$query->execute();
		$count = $query->fetch(PDO::FETCH_ASSOC);
		return $count = $count['count'];
	}

	public function search_filters($post)
	{
		# POST data already sanitized in controller
		$gender = $post['gender'];
		$age_min = $post['age_min'];
		$age_max = $post['age_max'];
		$distance = $post['distance'];

		$r = $this->db->prepare("SELECT member_id FROM users WHERE username = ?");
		$r->execute([$username]);
		if ($r)
		{
			foreach ($r as $r)
			{
				return $r['member_id'];
			}

		}
		return FALSE;
	}

}