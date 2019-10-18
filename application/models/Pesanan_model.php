<?php
class Pesanan_model extends CI_Model
{
    public function getPesanan()
    {

        return $data = $this->db->get('transaksi')->result_array();
        $json = json_encode($data);
        echo $json;
    }

    public function getCode()
    {
        $this->db->select('RIGHT(transaksi.no_transaksi,2) as no_transaksi', FALSE);
        $this->db->order_by('no_transaksi', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('transaksi');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->no_transaksi) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('dmY');
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodetampil = "EPR" . $tgl . "-" . $batas;  //format kode
        return $kodetampil;
    }

    public function savePesanan()
    {
        $data = array(
            "no_transaksi" => $this->input->post('no_transaksi'),
            "no_meja" => $this->input->post('no_meja'),
            "nama_barang" => $this->input->post('nama_barang'),
            "harga" => $this->input->post('harga'),
            "qty" => $this->input->post('qty'),
            "jumlah" => $this->input->post('jumlah'),
            "id_pelayan" => $this->input->post('id_pelayan'),
            "status" => $this->input->post('status')
        );
        $this->db->insert('transaksi', $data);
    }
}
