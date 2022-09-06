<?php
defined('BASEPATH') or die('No direct script access allowed!');

class M_galeri extends CI_Model
{
    public function getAll1()
    {
        return $this->db->get('tb_galeri');
    }

    public function getAlbum()
    {
        return $this->db->get('tb_album');
    }

    public function getPhotoByAlbum($album)
    {
        $this->db->order_by('foto_galeri', 'DESC');
        $this->db->limit(3);
        $this->db->where('nama_album', $album);
        return $this->db->get('tb_galeri');
    }

    public function getIdAlbum($album)
    {
        $this->db->where('nama_album', $album);
        return $this->db->get('tb_album')->row();
    }

    public function getPhotoByAlbumDetail($album)
    {
        $this->db->where('nama_album', $album);
        $this->db->order_by('foto_galeri', 'DESC');
        return $this->db->get('tb_galeri');
    }
}
